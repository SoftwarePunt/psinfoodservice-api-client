<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Relation PS-API type 
 * @generated 2021-07-14
 **/
class Relation extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $gln = null;
}
