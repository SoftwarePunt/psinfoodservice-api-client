<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Characteristic PS-API type 
 * @generated 2021-07-14
 **/
class Characteristic extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $friendlyname = null;
	public ?string $description = null;
	public ?int $isdefaultinnewproduct = null;
	public ?bool $isallowedonlabelvalue = null;
	public ?string $image = null;
	public ?int $sequence = null;
}
