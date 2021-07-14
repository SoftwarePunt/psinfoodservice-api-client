<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Unitofmeasurement PS-API type 
 * @generated 2021-07-14
 **/
class Unitofmeasurement extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public ?string $abbreviation = null;
	public string $name;
	public ?string $description = null;
	public ?int $sequence = null;
}
