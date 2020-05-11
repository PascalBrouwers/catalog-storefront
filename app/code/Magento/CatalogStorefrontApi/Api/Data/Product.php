<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

final class Product implements ProductInterface
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $attributeSetId;
    /**
     * @var bool
     */
    private $hasOptions;
    /**
     * @var string
     */
    private $createdAt;
    /**
     * @var string
     */
    private $updatedAt;
    /**
     * @var string
     */
    private $sku;
    /**
     * @var string
     */
    private $typeId;
    /**
     * @var string
     */
    private $status;
    /**
     * @var string
     */
    private $stockStatus;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $shortDescription;
    /**
     * @var string
     */
    private $urlKey;
    /**
     * @var string
     */
    private $taxClassId;
    /**
     * @var float
     */
    private $weight;
    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\ImageInterface
     */
    private $image;
    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\ImageInterface
     */
    private $smallImage;
    /**
     * @var \Magento\CatalogStorefrontApi\Api\Data\ImageInterface
     */
    private $thumbnail;
    /**
     * @var string
     */
    private $swatchImage;
    /**
     * @var string
     */
    private $visibility;
    /**
     * @var array
     */
    private $dynamicAttributes;
    /**
     * @var string
     */
    private $metaDescription;
    /**
     * @var string
     */
    private $metaKeyword;
    /**
     * @var string
     */
    private $metaTitle;
    /**
     * @var string
     */
    private $requiredOptions;
    /**
     * @var string
     */
    private $createdIn;
    /**
     * @var string
     */
    private $updatedIn;
    /**
     * @var string
     */
    private $quantityAndStockStatus;
    /**
     * @var string
     */
    private $optionsContainer;
    /**
     * @var string
     */
    private $msrpDisplayActualPriceType;
    /**
     * @var string
     */
    private $isReturnable;
    /**
     * @var string
     */
    private $urlSuffix;
    /**
     * @var array
     */
    private $options;
    /**
     * @var array
     */
    private $urlRewrites;
    /**
     * @var array
     */
    private $variants;
    /**
     * @var array
     */
    private $configurableOptions;


    /**
     * @return string
     */
    public function getId(): string
    {
        return (string) $this->id;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setId(string $value): void
    {
        $this->id = $value;
    }

    /**
     * @return string
     */
    public function getAttributeSetId(): string
    {
        return (string) $this->attributeSetId;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setAttributeSetId(string $value): void
    {
        $this->attributeSetId = $value;
    }

    /**
     * @return bool
     */
    public function getHasOptions(): bool
    {
        return (bool) $this->hasOptions;
    }
    
    /**
     * @param bool $value
     * @return void
     */
    public function setHasOptions(bool $value): void
    {
        $this->hasOptions = $value;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return (string) $this->createdAt;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setCreatedAt(string $value): void
    {
        $this->createdAt = $value;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return (string) $this->updatedAt;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setUpdatedAt(string $value): void
    {
        $this->updatedAt = $value;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return (string) $this->sku;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void
    {
        $this->sku = $value;
    }

    /**
     * @return string
     */
    public function getTypeId(): string
    {
        return (string) $this->typeId;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setTypeId(string $value): void
    {
        $this->typeId = $value;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return (string) $this->status;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setStatus(string $value): void
    {
        $this->status = $value;
    }

    /**
     * @return string
     */
    public function getStockStatus(): string
    {
        return (string) $this->stockStatus;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setStockStatus(string $value): void
    {
        $this->stockStatus = $value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return (string) $this->name;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setName(string $value): void
    {
        $this->name = $value;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return (string) $this->description;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setDescription(string $value): void
    {
        $this->description = $value;
    }

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return (string) $this->shortDescription;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setShortDescription(string $value): void
    {
        $this->shortDescription = $value;
    }

    /**
     * @return string
     */
    public function getUrlKey(): string
    {
        return (string) $this->urlKey;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setUrlKey(string $value): void
    {
        $this->urlKey = $value;
    }

    /**
     * @return string
     */
    public function getTaxClassId(): string
    {
        return (string) $this->taxClassId;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setTaxClassId(string $value): void
    {
        $this->taxClassId = $value;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return (float) $this->weight;
    }
    
    /**
     * @param float $value
     * @return void
     */
    public function setWeight(float $value): void
    {
        $this->weight = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImageInterface|null
     */
    public function getImage(): ?\Magento\CatalogStorefrontApi\Api\Data\ImageInterface
    {
        return $this->image;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImageInterface $value
     * @return void
     */
    public function setImage(\Magento\CatalogStorefrontApi\Api\Data\ImageInterface $value): void
    {
        $this->image = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImageInterface|null
     */
    public function getSmallImage(): ?\Magento\CatalogStorefrontApi\Api\Data\ImageInterface
    {
        return $this->smallImage;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImageInterface $value
     * @return void
     */
    public function setSmallImage(\Magento\CatalogStorefrontApi\Api\Data\ImageInterface $value): void
    {
        $this->smallImage = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImageInterface|null
     */
    public function getThumbnail(): ?\Magento\CatalogStorefrontApi\Api\Data\ImageInterface
    {
        return $this->thumbnail;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImageInterface $value
     * @return void
     */
    public function setThumbnail(\Magento\CatalogStorefrontApi\Api\Data\ImageInterface $value): void
    {
        $this->thumbnail = $value;
    }

    /**
     * @return string
     */
    public function getSwatchImage(): string
    {
        return (string) $this->swatchImage;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setSwatchImage(string $value): void
    {
        $this->swatchImage = $value;
    }

    /**
     * @return string
     */
    public function getVisibility(): string
    {
        return (string) $this->visibility;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setVisibility(string $value): void
    {
        $this->visibility = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\DynamicAttributeValueInterface[]
     */
    public function getDynamicAttributes(): array
    {
        return (array) $this->dynamicAttributes;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\DynamicAttributeValueInterface[] $value
     * @return void
     */
    public function setDynamicAttributes(array $value): void
    {
        $this->dynamicAttributes = $value;
    }

    /**
     * @return string
     */
    public function getMetaDescription(): string
    {
        return (string) $this->metaDescription;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setMetaDescription(string $value): void
    {
        $this->metaDescription = $value;
    }

    /**
     * @return string
     */
    public function getMetaKeyword(): string
    {
        return (string) $this->metaKeyword;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setMetaKeyword(string $value): void
    {
        $this->metaKeyword = $value;
    }

    /**
     * @return string
     */
    public function getMetaTitle(): string
    {
        return (string) $this->metaTitle;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setMetaTitle(string $value): void
    {
        $this->metaTitle = $value;
    }

    /**
     * @return string
     */
    public function getRequiredOptions(): string
    {
        return (string) $this->requiredOptions;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setRequiredOptions(string $value): void
    {
        $this->requiredOptions = $value;
    }

    /**
     * @return string
     */
    public function getCreatedIn(): string
    {
        return (string) $this->createdIn;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setCreatedIn(string $value): void
    {
        $this->createdIn = $value;
    }

    /**
     * @return string
     */
    public function getUpdatedIn(): string
    {
        return (string) $this->updatedIn;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setUpdatedIn(string $value): void
    {
        $this->updatedIn = $value;
    }

    /**
     * @return string
     */
    public function getQuantityAndStockStatus(): string
    {
        return (string) $this->quantityAndStockStatus;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setQuantityAndStockStatus(string $value): void
    {
        $this->quantityAndStockStatus = $value;
    }

    /**
     * @return string
     */
    public function getOptionsContainer(): string
    {
        return (string) $this->optionsContainer;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setOptionsContainer(string $value): void
    {
        $this->optionsContainer = $value;
    }

    /**
     * @return string
     */
    public function getMsrpDisplayActualPriceType(): string
    {
        return (string) $this->msrpDisplayActualPriceType;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setMsrpDisplayActualPriceType(string $value): void
    {
        $this->msrpDisplayActualPriceType = $value;
    }

    /**
     * @return string
     */
    public function getIsReturnable(): string
    {
        return (string) $this->isReturnable;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setIsReturnable(string $value): void
    {
        $this->isReturnable = $value;
    }

    /**
     * @return string
     */
    public function getUrlSuffix(): string
    {
        return (string) $this->urlSuffix;
    }
    
    /**
     * @param string $value
     * @return void
     */
    public function setUrlSuffix(string $value): void
    {
        $this->urlSuffix = $value;
    }

    /**
     * @return string[]
     */
    public function getOptions(): array
    {
        return (array) $this->options;
    }
    
    /**
     * @param string[] $value
     * @return void
     */
    public function setOptions(array $value): void
    {
        $this->options = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteInterface[]
     */
    public function getUrlRewrites(): array
    {
        return (array) $this->urlRewrites;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\UrlRewriteInterface[] $value
     * @return void
     */
    public function setUrlRewrites(array $value): void
    {
        $this->urlRewrites = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\VariantInterface[]
     */
    public function getVariants(): array
    {
        return (array) $this->variants;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\VariantInterface[] $value
     * @return void
     */
    public function setVariants(array $value): void
    {
        $this->variants = $value;
    }

    /**
     * @return \Magento\CatalogStorefrontApi\Api\Data\ConfigurableOptionInterface[]
     */
    public function getConfigurableOptions(): array
    {
        return (array) $this->configurableOptions;
    }
    
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ConfigurableOptionInterface[] $value
     * @return void
     */
    public function setConfigurableOptions(array $value): void
    {
        $this->configurableOptions = $value;
    }
}
