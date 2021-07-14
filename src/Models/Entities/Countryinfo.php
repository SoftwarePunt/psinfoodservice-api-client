<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Countryinfo PS-API type 
 * @generated 2021-07-14
 **/
class Countryinfo extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $isocode = null;
}
