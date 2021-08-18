<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Iddsi PS-API type 
 * @generated 2021-08-18
 **/
class Iddsi extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $description = null;
	public ?bool $forsolids = null;
	public ?bool $forliquids = null;
}
