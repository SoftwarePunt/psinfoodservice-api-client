<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Logisticinfo PS-API type 
 * @generated 2021-07-14
 **/
class Logisticinfo extends AbstractEntity
{
	/**
	 * Internal packagedproductid
	 */
	public int $id;
	/**
	 * Name of product as shown on Foodbook and specifiation
	 * Logistic/Name
	 */
	public string $name;
	/**
	 * GDSNTradeItemDescription (GS1 Only)
	 * Logistic/GDSNTradeItemDescription (GS1 only)
	 */
	public ?string $gdsntradeitemdescription = null;
	/**
	 * A short description of the product. Minimize abbreviations so that the description remains readable. 
	 * Logistic/Short productname
	 */
	public ?string $descriptionshort = null;
	/**
	 * GTIN = Global Trade Item Number, a unique identify number as emitted by GS1
	 * Logistic/GTIN
	 */
	public ?string $gtin = null;
	/**
	 * GTIN
	 * Logistic/GTIN
	 */
	public ?Alternativegtininfolist $alternativegtininfolist = null;
	/**
	 * Producer articlenumber
	 * Logistic/Productnumber
	 */
	public ?string $number = null;
	public ?string $thirdpartyid = null;
	/**
	 * Code for the trade in goods between countries of the European Union
	 * Logistic/Intrastat code
	 */
	public ?string $intrastatcode = null;
	/**
	 * The oval-shaped markings found on food products of animal origin
	 * Logistic/EG number
	 */
	public ?string $egnumber = null;
	/**
	 * Tax rate (VAT), id found in masters
	 * id in masters.taxrateapplicabilities
	 */
	public ?int $taxrateid = null;
	/**
	 * Tax rate (VAT)
	 * Logistic/Tax rate
	 */
	public ?string $taxratename = null;
	public bool $isbaseunit;
	/**
	 * Is this product available in the retail market?
	 * Logistic/Available in Retail
	 */
	public ?bool $isavailableinretail = null;
	/**
	 * Is this product available in the Foodservie market?
	 * Logistic/Available in Foodservice
	 */
	public ?bool $isavailableinfoodservice = null;
	/**
	 * e-mark or estimated sign on label
	 * Logistic/e-mark or estimated sign
	 */
	public ?bool $isestimatedweightorvalue = null;
	/**
	 * Is the package a consumer package?
	 * Logsitic/Is consumer unit
	 */
	public ?bool $isconsumerunit = null;
	/**
	 * The package can be despatched/delivered as such?
	 * Logistic/Despatch unit
	 */
	public ?bool $isdespatchunit = null;
	/**
	 * Is this package an invoice unit?
	 * Logistic/Is invoice unit
	 */
	public ?bool $isinvoiceunit = null;
	/**
	 * Is this package orderable?
	 * Logistic/Orderable unit
	 */
	public ?bool $isorderableunit = null;
	/**
	 * Is this package variable in weight or volume?
	 * Logistic/Is variable article
	 */
	public ?bool $isvariableunit = null;
	public ?Package $package = null;
	/**
	 * Weight of product without packagingmaterial
	 * Logistic/Net weight
	 */
	public ?float $netweightvalue = null;
	/**
	 * Unit of measure Id of weight of product without packagingmaterial, found in masters
	 * id in masters.unitsofmeasurements
	 */
	public ?int $netweightuomid = null;
	/**
	 * Name of Unit of measure of net weight
	 * Logistic/Net weight
	 */
	public ?string $netweightuomname = null;
	/**
	 * Net content of the package
	 * Logistic/Net content
	 */
	public ?float $netcontentvalue = null;
	/**
	 * Unit of measure Id of net content, found in masters
	 * id in masters.unitsofmeasurements
	 */
	public ?int $netcontentuomid = null;
	/**
	 * Name of Unit of measure of net content
	 * Logistic/Net content
	 */
	public ?string $netcontentuomname = null;
	/**
	 * Gross weight = net weight + weight of packaging
	 * Logistic/Gross weight
	 */
	public ?float $grossweightvalue = null;
	/**
	 * Unit of measure Id of gross weight of product, found in masters
	 * id in masters.unitsofmeasurements
	 */
	public ?int $grossweightuomid = null;
	/**
	 * Name of Unit of measure of gross weight
	 * Logistic/Gross weight
	 */
	public ?string $grossweightuomname = null;
	/**
	 * Weight of product after draining, so without water or brine.
	 * Logistic/Drained weight
	 */
	public ?float $drainedweightvalue = null;
	/**
	 * Unit of measure Id of drained weight of product, found in masters
	 * id in masters.unitsofmeasurements
	 */
	public ?int $drainedweightuomid = null;
	/**
	 * Name of Unit of measure of drained weight
	 * Logistic/Drained weight
	 */
	public ?string $drainedweightuomname = null;
	/**
	 * Id of PackagedProductType, found in masters
	 * id in masters.packagedproducttypes
	 */
	public ?int $packagedproducttypeid = null;
	/**
	 * Description of type of packaged product in hierarchy, like Base unit, Case or Pallet
	 * Logistic summary/Packagingtype
	 */
	public ?string $packagedproducttypename = null;
	/**
	 * E.g. 10 pieces of 60 gram per piece = 10 x 60 gram
	 * Logistic/weight per piece
	 */
	public ?float $servingweightvalue = null;
	/**
	 * Unit of measure Id of serving weight, found in masters
	 * id in masters.unitsofmeasurements
	 */
	public ?int $servingweightuomid = null;
	/**
	 * Name of Unit of measure of serving weight
	 * Logistic/weight per piece
	 */
	public ?string $servingweightuomname = null;
	/**
	 * E.g. 10 pieces of 60 gram per piece = 10 x 60 gram
	 * Logistic/Pieces (x weight per piece (e.g. 75 x 60g))
	 */
	public ?int $servingquantity = null;
	/**
	 * The amount of smaller packages in this package
	 * Logistic/Amount of smaller units in this packaging
	 */
	public ?int $numberofsmallerlogisticinfoitems = null;
	/**
	 * Amount of layers per pallet
	 * Logistic/Amount of layers per pallet
	 */
	public ?int $amountlayerperpallet = null;
	/**
	 * Amount of boxes per palletlayer
	 * Logistic/Amount of boxes per layer
	 */
	public ?int $amountperpalletlayer = null;
	/**
	 * Are GTINs visible on all packages?
	 * Logistic/Pallet/GTIN visible on all units
	 */
	public ?bool $gtinvisibleonproductsinpallet = null;
	/**
	 * Is an underlay sheet being used?
	 * Logistic/Pallet/Underlay sheet
	 */
	public ?bool $underlaysheet = null;
	/**
	 * Are there sheets between each pallet layer?
	 * Logistic/Pallet/Between sheet
	 */
	public ?bool $betweensheet = null;
	/**
	 * Is A cover sheet being used?
	 * Logistic/Pallet/Cover sheet
	 */
	public ?bool $coversheet = null;
	/**
	 * Is the pallet wrapped in foil?
	 * Logistic/Pallet/Wrapping foil
	 */
	public ?bool $wrappingfoil = null;
	/**
	 * Can the pallet be turned over?
	 * Logistic/Pallet/Collo can be turned
	 */
	public ?bool $productcanbeturnedover = null;
	/**
	 * The amount of servings in the package
	 * Logistic/Amount of servings in package
	 */
	public ?float $numberofservingsperpackage = null;
	/**
	 * The minimum amount of serving in the package
	 * Logistic/Minimum amount of servings in a package
	 */
	public ?float $minimumnumberofservingsperpackage = null;
	/**
	 * The maximum amount of serving in the package
	 * Logistic/Maximum amount of servings in a package
	 */
	public ?float $maximumnumberofservingsperpackage = null;
	public ?Assetinfolist $assetinfolist = null;
	public ?Logisticinfolist $logisticinfolist = null;
	public ?Storageconditionset $storageconditionset = null;
	public ?Microbiologicalsetinfolist $microbiologicalsetinfolist = null;
	public ?Labelcontact $labelcontact = null;
	public ?\DateTime $lastupdatedon = null;
}
