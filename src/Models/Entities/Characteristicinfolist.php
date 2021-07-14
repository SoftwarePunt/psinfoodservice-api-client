<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Characteristicinfolist PS-API type 
 * @generated 2021-07-14
 **/
class Characteristicinfolist extends AbstractEntity
{
	/**
	 * List of features (characteristics) of or claim on the product, e.g. Halal, Free from lactose
	 * Characteristics
	 * 
	 * @var Characteristicinfo[]
	 */
	public array $characteristicinfo;
}
