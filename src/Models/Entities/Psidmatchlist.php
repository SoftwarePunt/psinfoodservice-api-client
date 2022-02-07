<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Psidmatchlist PS-API type 
 * @generated 2022-02-07
 **/
class Psidmatchlist extends AbstractEntity
{
	public ?Psidsettings $psidsettings = null;
	/**
	 * @var Psidmatch[]
	 */
	public array $psidmatch;
}
