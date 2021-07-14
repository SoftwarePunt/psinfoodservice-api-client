<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Preparationinformationinfo PS-API type 
 * @generated 2021-07-14
 **/
class Preparationinformationinfo extends AbstractEntity
{
	public int $id;
	public int $preparationtypeid;
	public string $preparationtypename;
	public ?string $preparationdescription = null;
}
