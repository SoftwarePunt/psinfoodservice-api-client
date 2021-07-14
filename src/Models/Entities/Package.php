<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Package PS-API type 
 * @generated 2021-07-14
 **/
class Package extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?int $packagingtypeid = null;
	public ?string $packagingtypename = null;
	public ?int $depthuomid = null;
	public ?string $depthuomname = null;
	public ?float $depthvalue = null;
	public ?int $heightuomid = null;
	public ?string $heightuomname = null;
	public ?float $heightvalue = null;
	public ?int $widthuomid = null;
	public ?string $widthuomname = null;
	public ?float $widthvalue = null;
	public ?int $diameteruomid = null;
	public ?string $diameteruomname = null;
	public ?float $diametervalue = null;
	public ?int $weightuomid = null;
	public ?string $weightuomname = null;
	public ?float $weightvalue = null;
	public ?bool $depositapplies = null;
	public ?float $depositamount = null;
	public ?bool $isprimarypackage = null;
	public ?bool $ispackagerecyclable = null;
	public ?float $percentagerecycledmaterialused = null;
	public ?string $locationtraceabilitycode = null;
	public ?Packagingmaterialinfolist $packagingmaterialinfolist = null;
}
