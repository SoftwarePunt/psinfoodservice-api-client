<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Characteristicvalidation PS-API type 
 * @generated 2022-02-07
 **/
class Characteristicvalidation extends AbstractEntity
{
	public int $id;
	public int $basecharacteristicid;
	public ?string $basecharacteristicname = null;
	public bool $ischaracteristiccheck;
	public bool $isallergencheck;
	public ?int $tocheckcharacteristicid = null;
	public ?string $tocheckcharacteristicname = null;
	public ?int $tocheckcharacteristicnotallowedvalue = null;
	public ?int $tocheckallergenid = null;
	public ?string $tocheckallergenname = null;
	public ?int $tocheckallergennotallowedvalue = null;
}
