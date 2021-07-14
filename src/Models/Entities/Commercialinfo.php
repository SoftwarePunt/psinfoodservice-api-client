<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Commercialinfo PS-API type 
 * @generated 2021-07-14
 **/
class Commercialinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $legalname = null;
	public ?string $functionalname = null;
	public ?string $variantdescription = null;
	public ?Brand $brand = null;
	public ?int $producerid = null;
	public ?string $producername = null;
	public ?string $producergln = null;
	public ?int $globalproductclassificationid = null;
	public ?string $globalproductclassificationname = null;
	public ?string $globalproductclassificationcode = null;
	public ?Date $validfrom = null;
	public ?Date $validto = null;
	public ?Date $endavailabilitydate = null;
	public ?string $description = null;
	public ?string $commercialstorytitle = null;
	public ?string $commercialstorytext = null;
	public ?\DateTime $lastupdatedon = null;
}
