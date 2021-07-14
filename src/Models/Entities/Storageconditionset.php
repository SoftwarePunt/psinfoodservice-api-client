<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditionset PS-API type 
 * @generated 2021-07-14
 **/
class Storageconditionset extends AbstractEntity
{
	public ?string $comment = null;
	public ?string $usageinstructionlabel = null;
	public ?string $storageinstructionlabel = null;
	public ?int $preservationtechniqueid = null;
	public ?string $preservationtechniquename = null;
	public ?string $shelflifelocationtext = null;
	public ?int $shelflifeid = null;
	public ?Storageconditionstageinfolist $storageconditionstageinfolist = null;
}
