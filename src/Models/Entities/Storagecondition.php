<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storagecondition PS-API type 
 * @generated 2024-02-06
 **/
class Storagecondition extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public ?string $abbreviation = null;
	public ?int $sequence = null;
	public string $name;
	public ?string $description = null;
}
