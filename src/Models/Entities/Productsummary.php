<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Productsummary PS-API type 
 * @generated 2021-07-14
 **/
class Productsummary extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $ean = null;
	public ?float $netweight = null;
	public ?string $netweightunitofmeasure = null;
	public ?float $netcontent = null;
	public ?string $netcontentunitofmeasure = null;
	public ?int $brandid = null;
	public ?string $brandname = null;
	public ?\DateTime $lastupdatedon = null;
	public ?string $packshot = null;
	public ?bool $publiclyvisible = null;
	public ?int $targetmarketid = null;
	public ?string $targetmarketisocode = null;
}
