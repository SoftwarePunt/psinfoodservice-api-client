<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Organolepticcharacteristic PS-API type 
 * @generated 2021-07-14
 **/
class Organolepticcharacteristic extends AbstractEntity
{
	public int $id;
	public string $code;
	public ?string $abbreviation = null;
	public string $name;
	public ?string $description = null;
}
