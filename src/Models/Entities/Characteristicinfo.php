<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Characteristicinfo PS-API type 
 * @generated 2021-07-14
 **/
class Characteristicinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public bool $isapplicable;
	public ?bool $isclaimedonlabel = null;
	public ?string $logo = null;
	public ?string $friendlyname = null;
}
