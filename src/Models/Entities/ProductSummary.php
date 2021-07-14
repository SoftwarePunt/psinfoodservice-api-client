<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

class ProductSummary extends AbstractEntity
{
    public int $id;
    public string $name;
    public string $ean;
    public float $netWeight;
    public string $netWeightUnitOfMeasure;
    public float $netContent;
    public string $netContentUnitOfMeasure;
    public int $brandId;
    public string $brandName;
    public \DateTime $lastUpdatedOn;
    public string $packShot;
    public bool $publiclyVisible;
    public int $targetMarketId;
    public string $targetMarketIsoCode;
}