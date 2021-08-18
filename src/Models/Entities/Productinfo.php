<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Productinfo PS-API type 
 * @generated 2021-08-18
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
	/**
	 * This is a calculated field based on the provided productgroupid, or when empty the provided GPC code. This field will be ignored on update.
	 */
	public ?int $overalproductgroupid = null;
	public ?string $overalproductgroupname = null;
	/**
	 * This field will be ignored on updates. This fields value is determined by which productgroup is selected. If no productgroup is selected, the product will autmoatically be seen as a food product
	 */
	public ?bool $isnonfood = null;
	/**
	 * Country where the product was last processed or tested before being imported; id found in master.countries
	 * Country of production
	 * id in masters.countries
	 */
	public ?int $countryofproductionid = null;
	/**
	 * Country where the product was last processed or tested before being imported
	 * Country of production
	 */
	public ?string $countryofproductionname = null;
	/**
	 * Country where the product was last processed or tested before being imported; isocode found in master.countries
	 * isocode in masters.countries
	 */
	public ?string $countryofproductionisocode = null;
	/**
	 * Country from which the product originates; id found in master.country
	 * Country of origin
	 * id in masters.countries
	 */
	public ?int $countryoforiginid = null;
	/**
	 * Country from which the product originates; isocode found in master.countries
	 * isocode in masters.countries
	 */
	public ?string $countryoforiginisocode = null;
	/**
	 * Country from which the product originates
	 * Country of origin
	 */
	public ?string $countryoforiginname = null;
	/**
	 * The place where the animal was born/hatched. The place can be a country, region (land or sea), city/town, etc.
	 * Place of birth
	 */
	public ?string $locationofbirth = null;
	/**
	 * Place from which the animal originates
	 * Location of provenance
	 */
	public ?string $locationofprovenance = null;
	/**
	 * The place where the animal was reared after birth until the end of its life. The place can be a country, region (land or sea), city/town, etc.
	 * Place of rearing
	 */
	public ?string $locationofrearing = null;
	/**
	 * The place where the animal was slaughtered in order to be processed for food or other purposes. The place can be a country, region (land or sea), city/town, etc.
	 * Location of slaugther
	 */
	public ?string $locationofslaughter = null;
	/**
	 * This field is used when the main ingredient's origin differs from the said origin in the productname. Example: Dutch tomatosoup where the tomatoes are from italy.
	 * Location of slaugther
	 */
	public ?string $locationoforigin = null;
	public ?\DateTime $lastupdatedon = null;
	public ?Fishingredientinfolist $fishingredientinfolist = null;
	public ?Qualitymarkinfolist $qualitymarkinfolist = null;
	/**
	 * List of features of or claims on the product, e.g. Halal, Free from lactose
	 * tCharacteristics
	 */
	public ?Characteristicinfolist $characteristicinfolist = null;
	/**
	 * The IDDSI framework consists of a continuum of 8 levels (0 - 7), where drinks are measured from Levels 0 – 4, while foods are measured from Levels 3 – 7. The IDDSI Framework provides a common terminology to describe food textures and drink thickness.
	 */
	public ?int $iddsiid = null;
	/**
	 * The IDDSI framework consists of a continuum of 8 levels (0 - 7), where drinks are measured from Levels 0 – 4, while foods are measured from Levels 3 – 7. The IDDSI Framework provides a common terminology to describe food textures and drink thickness.
	 */
	public ?string $iddsiname = null;
}
