<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Globalproductclassification PS-API type 
 * @generated 2021-07-14
 **/
class Globalproductclassification extends AbstractEntity
{
	public int $id;
	public ?int $sequence = null;
	public ?string $segmentcode = null;
	public ?string $segmentdescription = null;
	public ?string $familycode = null;
	public ?string $familydescription = null;
	public ?string $classcode = null;
	public ?string $classdescription = null;
	public ?string $brickcode = null;
	public ?string $brickdescription = null;
	public bool $isnonfood;
}
