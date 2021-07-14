<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Fishcapturemethod PS-API type 
 * @generated 2021-07-14
 **/
class Fishcapturemethod extends AbstractEntity
{
	public int $id;
	public ?string $name = null;
	public ?string $description = null;
	public ?string $faocode = null;
}
