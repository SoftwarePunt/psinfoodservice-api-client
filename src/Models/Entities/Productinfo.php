<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Productinfo PS-API type 
 * @generated 2021-07-14
 **/
class Productinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public int $targetmarketid;
	public ?string $targetmarketname = null;
	public ?string $targetmarketisocode = null;
	public ?string $receptuurnummer = null;
	public ?int $productgroupid = null;
	public ?string $productgroupname = null;
	public ?int $overalproductgroupid = null;
	public ?string $overalproductgroupname = null;
	public ?bool $isnonfood = null;
	public ?int $countryofproductionid = null;
	public ?string $countryofproductionname = null;
	public ?string $countryofproductionisocode = null;
	public ?int $countryoforiginid = null;
	public ?string $countryoforiginisocode = null;
	public ?string $countryoforiginname = null;
	public ?string $locationofbirth = null;
	public ?string $locationofprovenance = null;
	public ?string $locationofrearing = null;
	public ?string $locationofslaughter = null;
	public ?string $locationoforigin = null;
	public ?\DateTime $lastupdatedon = null;
	public ?Fishingredientinfolist $fishingredientinfolist = null;
	public ?Qualitymarkinfolist $qualitymarkinfolist = null;
	public ?Characteristicinfolist $characteristicinfolist = null;
}
