<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Fishcatchzoneinfo PS-API type 
 * @generated 2021-07-14
 **/
class Fishcatchzoneinfo extends AbstractEntity
{
	public int $id;
	public ?string $faocode = null;
	public ?string $name = null;
}
