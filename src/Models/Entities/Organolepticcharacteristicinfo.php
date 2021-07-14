<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Organolepticcharacteristicinfo PS-API type 
 * @generated 2021-07-14
 **/
class Organolepticcharacteristicinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $description = null;
}
