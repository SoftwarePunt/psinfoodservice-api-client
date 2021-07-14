<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Qualitymarkinfo PS-API type 
 * @generated 2021-07-14
 **/
class Qualitymarkinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $logo = null;
}
