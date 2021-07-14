<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Productgroup PS-API type 
 * @generated 2021-07-14
 **/
class Productgroup extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $description = null;
	public ?int $sequence = null;
	public ?string $logo = null;
}
