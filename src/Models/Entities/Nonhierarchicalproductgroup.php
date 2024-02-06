<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nonhierarchicalproductgroup PS-API type 
 * @generated 2024-02-06
 **/
class Nonhierarchicalproductgroup extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $abbreviation = null;
	public ?string $description = null;
	public ?string $path = null;
	/**
	 * This field will be ignored on updates. This fields value is determined by which productgroup is selected. If no productgroup is selected, the product will autmoatically be seen as a food product
	 */
	public ?bool $isnonfood = null;
	public ?int $sequence = null;
}
