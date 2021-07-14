<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Nutrientset PS-API type 
 * @generated 2021-07-14
 **/
class Nutrientset extends AbstractEntity
{
	public ?string $nutrientcomment = null;
	public ?int $informationproviderid = null;
	public ?string $informationprovidername = null;
	public ?string $dailyvalueintakereferencecomment = null;
	public ?Nutrientinfolist $nutrientinfolist = null;
}
