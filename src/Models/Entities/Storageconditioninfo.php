<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditioninfo PS-API type 
 * @generated 2021-07-14
 **/
class Storageconditioninfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?float $mintemperature = null;
	public ?float $maxtemperature = null;
	public ?float $humidityfrom = null;
	public ?float $humidityto = null;
	public ?int $periodid = null;
	public ?string $periodname = null;
	public ?float $periodvalue = null;
	public ?string $comment = null;
}
