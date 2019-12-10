<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogProduct\DataProvider\LayeredNavigation\Builder;

use Magento\CatalogProduct\DataProvider\LayeredNavigation\AttributeOptionProvider;
use Magento\CatalogProduct\DataProvider\LayeredNavigation\LayerBuilderInterface;
use Magento\Framework\Api\Search\AggregationInterface;
use Magento\Framework\Api\Search\AggregationValueInterface;
use Magento\Framework\Api\Search\BucketInterface;

/**
 * @inheritdoc
 */
class Attribute implements LayerBuilderInterface
{
    /**
     * @var string
     * @see \Magento\CatalogProduct\DataProvider\LayeredNavigation\Category::CATEGORY_BUCKET
     */
    private const PRICE_BUCKET = 'price_bucket';

    /**
     * @var string
     * @see \Magento\CatalogProduct\DataProvider\LayeredNavigation\Builder\Price::PRICE_BUCKET
     */
    private const CATEGORY_BUCKET = 'category_bucket';

    /**
     * @var AttributeOptionProvider
     */
    private $attributeOptionProvider;

    /**
     * @var array
     */
    private $bucketNameFilter = [
        self::PRICE_BUCKET,
        self::CATEGORY_BUCKET
    ];

    /**
     * @param AttributeOptionProvider $attributeOptionProvider
     * @param array $bucketNameFilter List with buckets name to be removed from filter
     */
    public function __construct(
        AttributeOptionProvider $attributeOptionProvider,
        $bucketNameFilter = []
    ) {
        $this->attributeOptionProvider = $attributeOptionProvider;
        $this->bucketNameFilter = \array_merge($this->bucketNameFilter, $bucketNameFilter);
    }

    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     * @throws \Zend_Db_Statement_Exception
     */
    public function build(AggregationInterface $aggregation, ?int $storeId): array
    {
        $attributeOptions = $this->getAttributeOptions($aggregation);

        // build layer per attribute
        $result = [];
        foreach ($this->getAttributeBuckets($aggregation) as $bucket) {
            $bucketName = $bucket->getName();
            $attributeCode = \preg_replace('~_bucket$~', '', $bucketName);
            $attribute = $attributeOptions[$attributeCode] ?? [];

            $result[$bucketName] = $this->buildLayer(
                $attribute['attribute_label'] ?? $attributeCode,
                \count($bucket->getValues()),
                $attribute['attribute_code'] ?? $attributeCode
            );

            foreach ($bucket->getValues() as $value) {
                $metrics = $value->getMetrics();
                $result[$bucketName]['options'][] = $this->buildItem(
                    $attribute['options'][$metrics['value']] ?? $metrics['value'],
                    $metrics['value'],
                    $metrics['count']
                );
            }
        }

        return $result;
    }

    /**
     * Get attribute buckets excluding specified bucket names
     *
     * @param AggregationInterface $aggregation
     * @return \Generator|BucketInterface[]
     */
    private function getAttributeBuckets(AggregationInterface $aggregation)
    {
        foreach ($aggregation->getBuckets() as $bucket) {
            if (\in_array($bucket->getName(), $this->bucketNameFilter, true)) {
                continue;
            }
            if ($this->isBucketEmpty($bucket)) {
                continue;
            }
            yield $bucket;
        }
    }

    /**
     * Format layer data
     *
     * @param string $layerName
     * @param string $itemsCount
     * @param string $requestName
     * @return array
     */
    private function buildLayer($layerName, $itemsCount, $requestName): array
    {
        return [
            'label' => $layerName,
            'count' => $itemsCount,
            'attribute_code' => $requestName
        ];
    }

    /**
     * Format layer item data
     *
     * @param string $label
     * @param string|int $value
     * @param string|int $count
     * @return array
     */
    private function buildItem($label, $value, $count): array
    {
        return [
            'label' => $label,
            'value' => $value,
            'count' => $count,
        ];
    }

    /**
     * Check that bucket contains data
     *
     * @param BucketInterface|null $bucket
     * @return bool
     */
    private function isBucketEmpty(?BucketInterface $bucket): bool
    {
        return null === $bucket || !$bucket->getValues();
    }

    /**
     * Get list of attributes with options
     *
     * @param AggregationInterface $aggregation
     * @return array
     * @throws \Zend_Db_Statement_Exception
     */
    private function getAttributeOptions(AggregationInterface $aggregation): array
    {
        $attributeOptionIds = [];
        foreach ($this->getAttributeBuckets($aggregation) as $bucket) {
            $attributeOptionIds[] = \array_map(
                function (AggregationValueInterface $value) {
                    return $value->getValue();
                },
                $bucket->getValues()
            );
        }

        if (!$attributeOptionIds) {
            return [];
        }

        return $this->attributeOptionProvider->getOptions(\array_merge(...$attributeOptionIds));
    }
}
