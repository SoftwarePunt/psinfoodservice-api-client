<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Allergeninfo PS-API type 
 * @generated 2021-07-14
 **/
class Allergeninfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?int $levelofcontainmentid = null;
	public ?string $levelofcontainmentname = null;
}
