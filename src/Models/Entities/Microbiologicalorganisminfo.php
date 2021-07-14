<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Microbiologicalorganisminfo PS-API type 
 * @generated 2021-07-14
 **/
class Microbiologicalorganisminfo extends AbstractEntity
{
	public ?int $id = null;
	public ?string $name = null;
	public ?int $measurementprecisionid = null;
	public ?string $measurementprecisionname = null;
	public ?float $value = null;
	public ?int $unitofmeasureid = null;
	public ?string $unitofmeasurename = null;
	public ?float $sequence = null;
}
