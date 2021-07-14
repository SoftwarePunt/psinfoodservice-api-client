<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Allergen PS-API type 
 * @generated 2021-07-14
 **/
class Allergen extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public string $name;
	public ?string $description = null;
	public ?int $sequence = null;
	public ?int $parentid = null;
	public bool $isrequiredbylaw;
}
