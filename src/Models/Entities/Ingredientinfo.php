<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Ingredientinfo PS-API type 
 * @generated 2021-07-14
 **/
class Ingredientinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?int $sequence = null;
	public ?float $percentage = null;
	public ?float $internalpercentage = null;
}
