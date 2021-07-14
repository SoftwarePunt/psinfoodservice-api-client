<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Psidmatch PS-API type 
 * @generated 2021-07-14
 **/
class Psidmatch extends AbstractEntity
{
	public ?int $psid = null;
	public ?string $gtince = null;
	public ?string $gtinhe = null;
	public ?int $producerpsid = null;
	public ?string $producergln = null;
	public ?string $producername = null;
	public ?string $producerarticlenumber = null;
	public ?int $catalogownerid = null;
	public ?string $catalogownergln = null;
	public ?string $catalogownerarticlenumber = null;
	public ?string $matchingrulename = null;
	public ?int $targetmarketid = null;
}
