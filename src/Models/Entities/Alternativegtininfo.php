<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Alternativegtininfo PS-API type 
 * @generated 2021-07-14
 **/
class Alternativegtininfo extends AbstractEntity
{
	public ?int $id = null;
	public int $alternativegtinid;
	public ?string $alternativegtinname = null;
	public string $gtin;
}
