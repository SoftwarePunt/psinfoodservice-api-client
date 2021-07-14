<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Logisticinfo PS-API type 
 * @generated 2021-07-14
 **/
class Logisticinfo extends AbstractEntity
{
	public ?int $id = null;
	public string $name;
	public ?string $gdsntradeitemdescription = null;
	public ?string $descriptionshort = null;
	public ?string $gtin = null;
	public ?Alternativegtininfolist $alternativegtininfolist = null;
	public ?string $number = null;
	public ?string $thirdpartyid = null;
	public ?string $intrastatcode = null;
	public ?string $egnumber = null;
	public ?int $taxrateid = null;
	public ?string $taxratename = null;
	public bool $isbaseunit;
	public ?bool $isavailableinretail = null;
	public ?bool $isavailableinfoodservice = null;
	public ?bool $isestimatedweightorvalue = null;
	public ?bool $isconsumerunit = null;
	public ?bool $isdespatchunit = null;
	public ?bool $isinvoiceunit = null;
	public ?bool $isorderableunit = null;
	public ?bool $isvariableunit = null;
	public ?Package $package = null;
	public ?float $netweightvalue = null;
	public ?int $netweightuomid = null;
	public ?string $netweightuomname = null;
	public ?float $netcontentvalue = null;
	public ?int $netcontentuomid = null;
	public ?string $netcontentuomname = null;
	public ?float $grossweightvalue = null;
	public ?int $grossweightuomid = null;
	public ?string $grossweightuomname = null;
	public ?float $drainedweightvalue = null;
	public ?int $drainedweightuomid = null;
	public ?string $drainedweightuomname = null;
	public ?int $packagedproducttypeid = null;
	public ?string $packagedproducttypename = null;
	public ?float $servingweightvalue = null;
	public ?int $servingweightuomid = null;
	public ?string $servingweightuomname = null;
	public ?int $servingquantity = null;
	public ?int $numberofsmallerlogisticinfoitems = null;
	public ?int $amountlayerperpallet = null;
	public ?int $amountperpalletlayer = null;
	public ?bool $gtinvisibleonproductsinpallet = null;
	public ?bool $underlaysheet = null;
	public ?bool $betweensheet = null;
	public ?bool $coversheet = null;
	public ?bool $wrappingfoil = null;
	public ?bool $productcanbeturnedover = null;
	public ?float $numberofservingsperpackage = null;
	public ?float $minimumnumberofservingsperpackage = null;
	public ?float $maximumnumberofservingsperpackage = null;
	public ?Assetinfolist $assetinfolist = null;
	public ?Logisticinfolist $logisticinfolist = null;
	public ?Storageconditionset $storageconditionset = null;
	public ?Microbiologicalsetinfolist $microbiologicalsetinfolist = null;
	public ?Labelcontact $labelcontact = null;
	public ?\DateTime $lastupdatedon = null;
}
