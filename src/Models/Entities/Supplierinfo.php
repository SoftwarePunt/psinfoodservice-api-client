<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Supplierinfo PS-API type 
 * @generated 2021-07-14
 **/
class Supplierinfo extends AbstractEntity
{
	public int $packagedproductid;
	public ?string $gtin = null;
	public int $targetmarketid;
	public ?string $targetmarketname = null;
	public int $supplierrelationid;
	public ?string $suppliername = null;
	public string $suppliergln;
	public ?string $producername = null;
	public string $producergln;
}
