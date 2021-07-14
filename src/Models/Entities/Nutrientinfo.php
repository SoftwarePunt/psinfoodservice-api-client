<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutrientinfo PS-API type 
 * @generated 2021-07-14
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
	public ?Nutrients $nutrients = null;
}
