<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for ProductShopperInputOption class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class ProductShopperInputOptionMapper
{
    /**
     * @var string
     */
    private static $dtoClassName = ProductShopperInputOptionInterface::class;

    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Set the data to populate the DTO
    *
    * @param mixed $data
    * @return $this
    */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
    * Build new DTO populated with the data
    *
    * @return ProductShopperInputOption
    */
    public function build()
    {
        $dto = $this->objectManager->create(self::$dtoClassName);
        foreach ($this->data as $key => $valueData) {
            if ($valueData === null) {
                continue;
            }
            $this->setByKey($dto, $key, $valueData);
        }
        return $dto;
    }

    /**
    * Set the value of the key using setters.
    *
    * In case if the field is object, the corresponding Mapper would be create and DTO representing the field data
    * would be built
    *
    * @param ProductShopperInputOption $dto
    * @param string $key
    * @param mixed $value
    */
    private function setByKey(ProductShopperInputOption $dto, string $key, $value): void
    {
        switch ($key) {
            case "id":
                $dto->setId((string) $value);
                break;
            case "label":
                $dto->setLabel((string) $value);
                break;
            case "sort_order":
                $dto->setSortOrder((int) $value);
                break;
            case "required":
                $dto->setRequired((bool) $value);
                break;
            case "render_type":
                $dto->setRenderType((string) $value);
                break;
            case "price":
                $convertedArray = [];
                foreach ($value as $element) {
                    $convertedArray[] = $this->objectManager
                        ->create(\Magento\CatalogStorefrontApi\Api\Data\PriceMapper::class)
                        ->setData($element)
                        ->build();
                }
                $dto->setPrice($convertedArray);
                break;
            case "file_extension":
                $dto->setFileExtension((array) $value);
                break;
            case "range":
                $dto->setRange(
                    $this->objectManager
                       ->create(\Magento\CatalogStorefrontApi\Api\Data\ValueRangeMapper::class)
                       ->setData($value)
                       ->build()
                );
                break;
            case "image_size_x":
                $dto->setImageSizeX((int) $value);
                break;
            case "image_size_y":
                $dto->setImageSizeY((int) $value);
                break;
        }
    }
}
