<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutrientset PS-API type 
 * @generated 2021-07-14
 **/
class Nutrientset extends AbstractEntity
{
	/**
	 * General comment for all nutrients
	 * Nutrient comment
	 */
	public ?string $nutrientcomment = null;
	/**
	 * is the nutritional information analysed, calculated, or..; id found in master.nutritionalinformationproviders
	 * id in masters.nutritionalinformationproviders
	 */
	public ?int $informationproviderid = null;
	/**
	 * is the nutritional information analysed, calculated, or..
	 * Information source
	 */
	public ?string $informationprovidername = null;
	/**
	 * Alternative text reference intake. Only fill in if reference text is different from "reference intake of an average adult (8400kJ/2000kcal)." 
	 * Alternative text reference intake (when different from default)
	 */
	public ?string $dailyvalueintakereferencecomment = null;
	public ?Nutrientinfolist $nutrientinfolist = null;
}
