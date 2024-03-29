<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutrient PS-API type 
 * @generated 2024-02-06
 **/
class Nutrient extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?int $measurementprecisionid = null;
	public ?string $measurementprecisionname = null;
	public ?float $value = null;
	public ?float $valueperserving = null;
	public ?Decimal $decimalvalue = null;
	public ?Decimal $decimalvalueperserving = null;
	public ?float $guidelinedailyamount = null;
	public ?int $unitofmeasureid = null;
	public ?string $unitofmeasurename = null;
}
