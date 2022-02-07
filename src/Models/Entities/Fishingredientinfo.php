<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Fishingredientinfo PS-API type 
 * @generated 2022-02-07
 **/
class Fishingredientinfo extends AbstractEntity
{
	public int $id;
	public string $ingredientname;
	public int $fishid;
	public ?string $fishtaxocode = null;
	public ?string $fish3alphacode = null;
	public ?string $fishname = null;
	public int $capturemethodid;
	public ?string $capturemethodfaocode = null;
	public ?string $capturemethodname = null;
	public ?Catchzoneinfolist $catchzoneinfolist = null;
	public ?int $countryoforiginid = null;
	public ?string $countryoforiginname = null;
}
