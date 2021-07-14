<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Characteristicinfo PS-API type 
 * @generated 2021-07-14
 **/
class Characteristicinfo extends AbstractEntity
{
	/**
	 * Feature of or claim on the product, e.g. Halal, Free from lactose
	 * id in master.characteristic
	 */
	public int $id;
	/**
	 * Feature of or claim on the product, e.g. Halal, Free from lactose
	 * Characteristics
	 */
	public string $name;
	/**
	 * Is the characteristic applicable? E.g. Contains lactose: No means there is no lactose in the product. E.g. Halal: Yes means yes, this product is Halal. Contains beef: Yes means this product contains beef.
	 * Characteristics/Is applicable
	 */
	public bool $isapplicable;
	/**
	 * Is this characteristic claimed on the product label? 1 means: Yes on label, 0 means: Not on label
	 * Present as a claim on the packsging
	 */
	public ?bool $isclaimedonlabel = null;
	public ?string $logo = null;
	/**
	 * Claim as shown on packaging
	 * As claim on a packaging
	 */
	public ?string $friendlyname = null;
}
