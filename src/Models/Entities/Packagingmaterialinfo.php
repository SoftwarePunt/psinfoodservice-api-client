<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Packagingmaterialinfo PS-API type 
 * @generated 2021-07-14
 **/
class Packagingmaterialinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?float $value = null;
	public ?int $unitofmeasureid = null;
	public ?string $unitofmeasurename = null;
	public ?string $comment = null;
	public ?bool $isrecyclable = null;
	public ?float $percentagerecycledmaterial = null;
}
