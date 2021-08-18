<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Updateresult PS-API type 
 * @generated 2021-08-18
 **/
class Updateresult extends AbstractEntity
{
	/**
	 * 1
	 */
	public bool $issucceeded;
	/**
	 * 2
	 */
	public int $productid;
	public ?string $productean = null;
	public ?string $productthirdpartyid = null;
	public ?string $productnumber = null;
	public ?Loginfolist $loginfolist = null;
}
