<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutrienttype PS-API type 
 * @generated 2021-07-14
 **/
class Nutrienttype extends AbstractEntity
{
	public int $id;
	public ?string $code = null;
	public ?string $abbreviation = null;
	public string $name;
	public ?string $description = null;
	public ?int $sequence = null;
	public ?int $defaultunitofmeasureid = null;
	public ?int $defaultinnewspec = null;
	public ?bool $isrequiredbylaw = null;
	public ?int $roundbynumberdecimals = null;
}
