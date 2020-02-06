<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\CatalogInventoryStorefront\Plugin;

use Magento\CatalogInventory\Api\Data\StockItemInterface;
use Magento\CatalogInventory\Api\StockRegistryInterface;
use Magento\CatalogStorefrontConnector\Plugin\ProductUpdatesPublisher;
use Magento\Framework\Indexer\IndexerRegistry;

/**
 * Plugin for collect products data during reindex.
 */
class CollectProductsDataForUpdateAfterStockUpdate
{
    /**
     * @var ProductUpdatesPublisher
     */
    private $productPublisher;

    /**
     * @var IndexerRegistry
     */
    private $indexerRegistry;

    /**
     * @param ProductUpdatesPublisher $productPublisher
     * @param IndexerRegistry $indexerRegistry
     */
    public function __construct(
        ProductUpdatesPublisher $productPublisher,
        IndexerRegistry $indexerRegistry
    ) {
        $this->productPublisher = $productPublisher;
        $this->indexerRegistry = $indexerRegistry;
    }

    /**
     * Handle stock item save
     *
     * @param StockRegistryInterface $subject
     * @param int? $result
     * @param string $productSku
     * @param StockItemInterface $stockItem
     * @return void
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterUpdateStockItemBySku(
        StockRegistryInterface $subject,
        ?int $result,
        string $productSku,
        StockItemInterface $stockItem
    ): ?int {
        $this->productPublisher->publish(
            [(int)$stockItem->getProductId()],
            (int)$stockItem->getStoreId()
        );

        return (int)$result;
    }
}
