<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Alternativegtin PS-API type 
 * @generated 2021-07-14
 **/
class Alternativegtin extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $description = null;
	public ?int $sequence = null;
}
