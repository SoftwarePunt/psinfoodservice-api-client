<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Brandupdateresult PS-API type 
 * @generated 2022-02-07
 **/
class Brandupdateresult extends AbstractEntity
{
	/**
	 * 1
	 */
	public bool $issucceeded;
	/**
	 * 2
	 */
	public int $brandid;
	public ?string $brandthirdpartyid = null;
	public ?Loginfolist $loginfolist = null;
}
