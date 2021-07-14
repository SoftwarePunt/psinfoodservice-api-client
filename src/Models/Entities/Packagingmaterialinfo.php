<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Packagingmaterialinfo PS-API type 
 * @generated 2021-07-14
 **/
class Packagingmaterialinfo extends AbstractEntity
{
	/**
	 * The package is made from this material; id found in master.packagingmaterials
	 * id found in master.packagingmaterials
	 */
	public int $id;
	/**
	 * The package is made from this material
	 * Master/Packages/Packaging material
	 */
	public string $name;
	/**
	 * Weigth of this packaging material. E.g. 15 if 15 gram of plastic is being used
	 * Master/Packages/Packagingmaterial/Value
	 */
	public ?float $value = null;
	/**
	 * Unit of measure of weigth of this packaging material;id found in master.unitofmeasures
	 * Master/Packages/Packagingmaterial/Unit of measure
	 * id found in master.unitofmeasures
	 */
	public ?int $unitofmeasureid = null;
	public ?string $unitofmeasurename = null;
	public ?string $comment = null;
	public ?bool $isrecyclable = null;
	public ?float $percentagerecycledmaterial = null;
}
