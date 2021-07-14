<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Fishcatchzone PS-API type 
 * @generated 2021-07-14
 **/
class Fishcatchzone extends AbstractEntity
{
	public int $id;
	/**
	 * Fish catch zone
	 */
	public ?string $name = null;
	public ?string $faocode = null;
}
