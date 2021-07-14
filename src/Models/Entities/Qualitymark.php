<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Qualitymark PS-API type 
 * @generated 2021-07-14
 **/
class Qualitymark extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public ?string $abbreviation = null;
	public string $name;
	public ?string $description = null;
	public ?string $image = null;
	public ?int $sequence = null;
}
