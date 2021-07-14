<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Shelflife PS-API type 
 * @generated 2021-07-14
 **/
class Shelflife extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?int $sequence = null;
}
