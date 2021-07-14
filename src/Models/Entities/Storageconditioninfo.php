<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditioninfo PS-API type 
 * @generated 2021-07-14
 **/
class Storageconditioninfo extends AbstractEntity
{
	public int $id;
	public string $name;
	/**
	 * Minimum temperature in °C
	 * todoLogistic/Storagecondition/Min. T °C
	 */
	public ?float $mintemperature = null;
	/**
	 * Maximum temperature in °C
	 * Logistic/Storagecondition/Max. T °C
	 */
	public ?float $maxtemperature = null;
	/**
	 * Minimum humidity for product storage
	 * Logistic/Storagecondition/Min humidity
	 */
	public ?float $humidityfrom = null;
	/**
	 * Maximum humidity for product storage
	 * Logistic/Storagecondition/Max humidity
	 */
	public ?float $humidityto = null;
	/**
	 * The amount of days, weeks, year the product can be stored; id found in master.periods
	 * id in master.periods
	 */
	public ?int $periodid = null;
	/**
	 * The amount of days, weeks, year the product can be stored
	 * Logistic/Storagecondition/Period
	 */
	public ?string $periodname = null;
	/**
	 * The amount of days, weeks, year the product can be stored
	 * Logistic/Storagecondition/Period
	 */
	public ?float $periodvalue = null;
	public ?string $comment = null;
}
