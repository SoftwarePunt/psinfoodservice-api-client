<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditionstage PS-API type 
 * @generated 2021-07-14
 **/
class Storageconditionstage extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public ?string $abbreviation = null;
	public string $name;
	public ?string $description = null;
	public ?int $sequence = null;
}
