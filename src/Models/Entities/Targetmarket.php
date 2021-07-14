<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Targetmarket PS-API type 
 * @generated 2021-07-14
 **/
class Targetmarket extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $abbreviation = null;
	public ?string $isocode = null;
	public ?int $sequence = null;
}
