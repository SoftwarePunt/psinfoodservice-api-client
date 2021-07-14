<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Physiochemicalcharacteristicinfo PS-API type 
 * @generated 2021-07-14
 **/
class Physiochemicalcharacteristicinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?float $valuefrom = null;
	public ?float $valueto = null;
	public ?int $unitofmeasureid = null;
	public ?string $unitofmeasurename = null;
}
