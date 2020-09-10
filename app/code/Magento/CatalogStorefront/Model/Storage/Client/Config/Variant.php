<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefront\Model\Storage\Client\Config;

/**
 * Variant entity type config.
 */
class Variant implements EntityConfigInterface
{
    /**
     * Entity name. Used to hold configuration for specific entity type and as a part of the storage name
     */
    public const ENTITY_NAME = 'variant';

    /**
     * @inheritdoc
     */
    public function getSettings() : array
    {
        return [
            'dynamic_templates' => [
                [
                    'default_mapping' => [
                        'match' => '*',
                        'match_mapping_type' => '*',
                        'mapping' => [
                            'index' => false,
                        ],
                    ],
                ]
            ],
        ];
    }
}
