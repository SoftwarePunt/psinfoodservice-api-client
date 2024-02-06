<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Specificationinfo PS-API type 
 * @generated 2024-02-06
 **/
class Specificationinfo extends AbstractEntity
{
	public int $id;
	public ?int $productionlocationid = null;
	public ?string $productionlocationname = null;
	public ?string $productionlocationgln = null;
	public ?\DateTime $validfrom = null;
	public ?\DateTime $validto = null;
	public ?string $specificationstatusname = null;
	public ?Ingredientset $ingredientset = null;
	public ?Allergenset $allergenset = null;
	public ?Nutrientset $nutrientset = null;
	public ?Preparationinfoset $preparationinformationset = null;
	public ?Physiochemicalcharacteristicset $physiochemicalcharacteristicset = null;
	public ?Organolepticcharacteristicset $organolepticcharacteristicset = null;
	public ?\DateTime $lastupdatedon = null;
	public ?\DateTime $lastvalidatedon = null;
	public ?float $percentagefruit = null;
	public ?float $percentagevegetable = null;
	public ?float $percentagenuts = null;
	public ?float $percentagemeat = null;
	public ?float $percentagefish = null;
	public ?float $percentageoils = null;
}
