<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Labelcontacttype PS-API type 
 * @generated 2021-07-14
 **/
class Labelcontacttype extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $description = null;
}
