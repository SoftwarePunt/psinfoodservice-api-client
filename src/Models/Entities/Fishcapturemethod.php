<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Fishcapturemethod PS-API type 
 * @generated 2021-07-14
 **/
class Fishcapturemethod extends AbstractEntity
{
	/**
	 * Capture method used to catch the fish; id found in master
	 * Fish capture method
	 * id found in master.fishcapturemethod
	 */
	public int $id;
	/**
	 * Capture method used to catch the fish
	 * Fish capture method
	 */
	public ?string $name = null;
	/**
	 * Capture method used to catch the fish
	 * Fish capture method
	 */
	public ?string $description = null;
	/**
	 * Capture method used to catch the fish; fao code found in master
	 * fao code found in master.fishcapturemethod
	 */
	public ?string $faocode = null;
}
