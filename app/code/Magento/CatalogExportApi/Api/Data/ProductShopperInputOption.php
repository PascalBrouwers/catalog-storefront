<?php

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 *
 * Generated from et_schema.xml. DO NOT EDIT!
 */

declare(strict_types=1);

namespace Magento\CatalogExportApi\Api\Data;

/**
 * ProductShopperInputOption entity
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class ProductShopperInputOption
{
    /** @var string */
    private $id;

    /** @var string */
    private $label;

    /** @var string */
    private $value;

    /** @var bool */
    private $isRequired;

    /** @var int */
    private $sortOrder;

    /** @var string */
    private $renderType;

    /** @var \Magento\CatalogExportApi\Api\Data\Price[]|null */
    private $price;

    /** @var int */
    private $maxCharacters;

    /** @var string */
    private $fileExtension;

    /** @var int */
    private $imageSizeX;

    /** @var int */
    private $imageSizeY;

    /**
     * Get id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return void
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return void
     */
    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return void
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Get is required
     *
     * @return bool
     */
    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    /**
     * Set is required
     *
     * @param bool $isRequired
     * @return void
     */
    public function setIsRequired(?bool $isRequired): void
    {
        $this->isRequired = $isRequired;
    }

    /**
     * Get sort order
     *
     * @return int
     */
    public function getSortOrder(): ?int
    {
        return $this->sortOrder;
    }

    /**
     * Set sort order
     *
     * @param int $sortOrder
     * @return void
     */
    public function setSortOrder(?int $sortOrder): void
    {
        $this->sortOrder = $sortOrder;
    }

    /**
     * Get render type
     *
     * @return string
     */
    public function getRenderType(): ?string
    {
        return $this->renderType;
    }

    /**
     * Set render type
     *
     * @param string $renderType
     * @return void
     */
    public function setRenderType(?string $renderType): void
    {
        $this->renderType = $renderType;
    }

    /**
     * Get price
     *
     * @return \Magento\CatalogExportApi\Api\Data\Price[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * Set price
     *
     * @param \Magento\CatalogExportApi\Api\Data\Price[] $price
     * @return void
     */
    public function setPrice(?array $price = null): void
    {
        $this->price = $price;
    }

    /**
     * Get max characters
     *
     * @return int
     */
    public function getMaxCharacters(): ?int
    {
        return $this->maxCharacters;
    }

    /**
     * Set max characters
     *
     * @param int $maxCharacters
     * @return void
     */
    public function setMaxCharacters(?int $maxCharacters): void
    {
        $this->maxCharacters = $maxCharacters;
    }

    /**
     * Get file extension
     *
     * @return string
     */
    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }

    /**
     * Set file extension
     *
     * @param string $fileExtension
     * @return void
     */
    public function setFileExtension(?string $fileExtension): void
    {
        $this->fileExtension = $fileExtension;
    }

    /**
     * Get image size x
     *
     * @return int
     */
    public function getImageSizeX(): ?int
    {
        return $this->imageSizeX;
    }

    /**
     * Set image size x
     *
     * @param int $imageSizeX
     * @return void
     */
    public function setImageSizeX(?int $imageSizeX): void
    {
        $this->imageSizeX = $imageSizeX;
    }

    /**
     * Get image size y
     *
     * @return int
     */
    public function getImageSizeY(): ?int
    {
        return $this->imageSizeY;
    }

    /**
     * Set image size y
     *
     * @param int $imageSizeY
     * @return void
     */
    public function setImageSizeY(?int $imageSizeY): void
    {
        $this->imageSizeY = $imageSizeY;
    }
}
