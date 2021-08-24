<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Productgroupinfo PS-API type 
 * @generated 2021-08-24
 **/
class Productgroupinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public Productgroups $productgroups;
}
