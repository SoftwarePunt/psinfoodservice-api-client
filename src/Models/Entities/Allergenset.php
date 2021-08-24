<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Allergenset PS-API type 
 * @generated 2021-08-24
 **/
class Allergenset extends AbstractEntity
{
	public ?string $allergencomment = null;
	public Allergens $allergens;
}
