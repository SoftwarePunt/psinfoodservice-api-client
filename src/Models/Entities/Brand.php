<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Brand PS-API type 
 * @generated 2024-02-06
 **/
class Brand extends AbstractEntity
{
	public int $id;
	public string $name;
	public ?string $thirdpartyid = null;
	public ?int $brandownerid = null;
	public ?string $brandownername = null;
	public ?bool $isprivatelabel = null;
	public ?string $brandownergln = null;
	public ?string $description = null;
	public ?string $image = null;
}
