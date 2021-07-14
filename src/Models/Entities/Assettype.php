<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Assettype PS-API type 
 * @generated 2021-07-14
 **/
class Assettype extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $description = null;
	public ?int $sequence = null;
}
