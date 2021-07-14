<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Labelcontact PS-API type 
 * @generated 2021-07-14
 **/
class Labelcontact extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $communicationaddress = null;
	public ?Labelcontactcommunicationchannelinfolist $labelcontactcommunicationchannelinfolist = null;
}
