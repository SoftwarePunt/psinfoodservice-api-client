<?php

namespace SoftwarePunt\PSAPI\Models\Enums;

use SoftwarePunt\PSAPI\Models\AbstractEnum;

/**
 * Switch for which productinformation is returned
 */
class ProductVisibility extends AbstractEnum
{
    /**
     * Default, will show both publicly available products and private products
     */
    public const All = 2;
    /**
     * Will only show publicly available products
     */
    public const PubliclyVisible = 1;
    /**
     * Will only show private products
     */
    public const PrivatelyVisible = 0;
}