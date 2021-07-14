<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Labelcontactcommunicationchannelinfo PS-API type 
 * @generated 2021-07-14
 **/
class Labelcontactcommunicationchannelinfo extends AbstractEntity
{
	public int $labelcontacttypeid;
	public string $labelcontacttypename;
	public ?string $website = null;
	public ?string $emailaddress = null;
	public ?string $phonenumber = null;
	public ?string $faxnumber = null;
	public ?int $sequence = null;
}
