<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Scientificfishname PS-API type 
 * @generated 2021-07-14
 **/
class Scientificfishname extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	/**
	 * Latin name of the fish
	 * Scientific name fish
	 */
	public ?string $scientificname = null;
	public ?string $taxonomiccode = null;
	public ?string $alphacode = null;
	public ?string $description = null;
}
