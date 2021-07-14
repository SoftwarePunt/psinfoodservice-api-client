<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutritionalinformationprovider PS-API type 
 * @generated 2021-07-14
 **/
class Nutritionalinformationprovider extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $abbreviation = null;
	public ?string $description = null;
	public ?int $sequence = null;
}
