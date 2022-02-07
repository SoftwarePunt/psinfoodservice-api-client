<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Brandinfo PS-API type 
 * @generated 2022-02-07
 **/
class Brandinfo extends AbstractEntity
{
	public int $id;
	public string $name;
	public string $thirdpartyid;
	public bool $isprivatelabel;
	public bool $ispubliclyvisible;
	public int $declarationformattypeid;
	public bool $isvisibleinproducerdetail;
	public ?string $updateresult = null;
}
