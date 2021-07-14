<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditionstageinfo PS-API type 
 * @generated 2021-07-14
 **/
class Storageconditionstageinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?Storageconditioninfolist $storageconditioninfolist = null;
}
