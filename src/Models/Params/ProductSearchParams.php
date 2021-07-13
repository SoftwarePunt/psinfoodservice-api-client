<?php

namespace SoftwarePunt\PSAPI\Models\Params;

use SoftwarePunt\PSAPI\Models\AbstractParams;
use SoftwarePunt\PSAPI\Models\Enums\ProductVisibility;

class ProductSearchParams extends AbstractParams
{
    /**
     * Enables searching within all publicly visible products
     */
    public bool $ShowPublicProductSet;
    /**
     * Enables searching within all products where the API account is producer
     */
    public bool $ShowMyProducedProductSet;
    /**
     * Enables searching within all products where API account is brand owner
     */
    public bool $ShowMyBrandsProductSet;
    /**
     * Enables searching within all products in the API account catalog
     */
    public bool $ShowMyCatalogProductSet;
    /**
     * Enable this set for retrieving NEVO products. This set cannot be combined with other sets
     */
    public bool $ShowNevoProductSet;
    /**
     * Enables searching within all products in the following sets: Public, Produced, Brand, Catalog
     */
    public bool $ShowAllProductSet;
    /**
     * Enables searching within all product where API account has special authorization
     */
    public bool $ShowSubscribedProductSet;
    /**
     * Filter on one or more targetmarket ids. This is a ; separated list. Default value is 1 (which is NL)
     */
    public string $FilterOnTargetmarketIds;
    /**
     * Include all targetmarkets in the search result
     */
    public bool $IncludeAllTargetmarkets;
    /**
     * Searches for products where psid is in the ';' seperated list.
     * Useful for collecting multiple specific products at once
     */
    public string $FilterOnPsIds;
    /**
     * Enable this will remove the take restriction and return only the summary of a product.
     */
    public bool $SummaryOnly;
    /**
     * Enable this will remove the take (50) restriction and returns only the PSIDs ; separated.
     * The other filters still remain active
     */
    public bool $IdOnly;
    /**
     * Get only products which are changed after this data.
     */
    public \DateTime $LastModifiedAfter;
    /**
     * Search in the name of the product
     */
    public string $FilterOnFreeText;
    /**
     * Search for products where EAN number is given value within requested sets
     */
    public int $FilterOnEan;
    /**
     * Searches for products where the gtins are in a ';' seperated list
     * Useful for collecting multiple specific products at once
     */
    public string $FilterOnGTINs;
    /**
     * Searches for products where producer Id is given value within requested sets
     */
    public int $FilterOnProducerId;
    /**
     * Searches for products where producer GLN is given value within requested sets
     */
    public string $FilterOnProducerGLN;
    /**
     * Searches for products where brand id is given value within requested sets
     */
    public int $FilterOnBrandId;
    /**
     * Searches for products where brand owner id is given value within requested sets
     */
    public int $FilterOnBrandOwnerId;
    /**
     * Searches for products where brand owner GLN is given value within requested sets
     */
    public string $FilterOnBrandOwnerGLN;
    /**
     * Searches for products where ps productgroup id is given value within requested sets
     */
    public int $FilterOnGroupId;
    /**
     * Searches for products where private productgroup id is given value within requested sets
     */
    public int $FilterOnPrivateGroupId;
    /**
     * Searches for products that are private label within requested sets
     */
    public bool $FilterOnPrivateLabelOnly;
    /**
     * Filter on visibility
     */
    public int $FilterOnVisibility = ProductVisibility::All;
    /**
     * Filter on the Id of a grossery (groothandel).
     * This parameter is used in combination with the grosserynumber.
     * For matching multiple values at once, please use the conversion/match method.
     */
    public int $FilterOnGrosseryId;
    /**
     * Filter on the Gln of a grossery (groothandel).
     * This parameter is used in combination with the grosserynumber.
     */
    public string $FilterOnGrosseryGLN;
    /**
     * Number of the product as is known by the grossery.
     * For matching multiple values at once, please use the conversion/match method.
     */
    public string $FilterOnGrosseryNumber;
}