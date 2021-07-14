<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Microbiologicalsetinfo PS-API type 
 * @generated 2021-07-14
 **/
class Microbiologicalsetinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public int $microbiologicalstageid;
	public string $microbiologicalstagename;
	public ?Microbiologicalorganisminfolist $microbiologicalorganisminfolist = null;
}
