<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

// phpcs:ignore Magento2.Security.IncludeFile
require __DIR__ . '/../../ConfigurableProduct/_files/configurable_products.php';

use Magento\TestFramework\Helper\Bootstrap;
use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\TestFramework\Helper\CacheCleaner;

$eavConfig = Bootstrap::getObjectManager()->get(\Magento\Eav\Model\Config::class);

/** @var $attribute \Magento\Catalog\Model\ResourceModel\Eav\Attribute */
$attribute = $eavConfig->getAttribute('catalog_product', 'test_configurable');

$eavConfig->clear();

$attribute->setIsSearchable(1)
          ->setIsVisibleInAdvancedSearch(1)
         ->setIsFilterable(true)
         ->setIsFilterableInSearch(true)
    ->setIsVisibleOnFront(1);

/** @var AttributeRepositoryInterface $attributeRepository */
$attributeRepository = Bootstrap::getObjectManager()->create(AttributeRepositoryInterface::class);
$attributeRepository->save($attribute);

CacheCleaner::cleanAll();

// Run from CLI due to some classes involved in reindex process have state which do not allow to reindex
$appDir = dirname(Bootstrap::getInstance()->getAppTempDir());
$out = '';
// phpcs:ignore Magento2.Security.InsecureFunction
exec("php -f {$appDir}/bin/magento indexer:reindex catalogsearch_fulltext", $out);
