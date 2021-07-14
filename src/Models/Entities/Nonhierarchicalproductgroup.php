<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nonhierarchicalproductgroup PS-API type 
 * @generated 2021-07-14
 **/
class Nonhierarchicalproductgroup extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $abbreviation = null;
	public ?string $description = null;
	public ?string $path = null;
	public ?int $sequence = null;
}
