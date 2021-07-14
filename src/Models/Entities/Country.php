<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Country PS-API type 
 * @generated 2021-07-14
 **/
class Country extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public ?string $abbreviation = null;
	public ?string $isocode = null;
	public string $name;
	public ?string $description = null;
}
