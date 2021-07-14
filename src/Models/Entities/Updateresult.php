<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Updateresult PS-API type 
 * @generated 2021-07-14
 **/
class Updateresult extends AbstractEntity
{
	public bool $issucceeded;
	public int $productid;
	public ?string $productean = null;
	public ?string $productthirdpartyid = null;
	public ?string $productnumber = null;
	public ?Loginfolist $loginfolist = null;
}
