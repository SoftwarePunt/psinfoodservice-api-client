<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutrientinfo PS-API type 
 * @generated 2024-02-06
 **/
class Nutrientinfo extends AbstractEntity
{
	public int $id;
	public int $stateofpreparationid;
	public ?string $stateofpreparationname = null;
	public ?int $perhunderduomid = null;
	public ?string $perhunderduomname = null;
	public ?float $servingunitvalue = null;
	public ?int $servinguomid = null;
	public ?string $servinguomname = null;
	/**
	 * When set to true, this will attempt to automatically calculate the nutrients per potion values based on the per 100 and the portion size. Autmoatic calculation will only be done on nutrients that have no servingunitvalue
	 */
	public ?bool $autocalculatenutrientperportion = null;
	public ?Nutrients $nutrients = null;
}
