<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Assetformattype PS-API type 
 * @generated 2021-07-14
 **/
class Assetformattype extends AbstractEntity
{
	public int $id;
	public int $assettypeid;
	public ?string $assettypename = null;
	public ?string $name = null;
	public ?string $description = null;
	public ?int $sequence = null;
}
