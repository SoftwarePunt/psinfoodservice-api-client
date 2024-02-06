<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Assetimageinfo PS-API type 
 * @generated 2024-02-06
 **/
class Assetimageinfo extends AbstractEntity
{
	public ?string $filename = null;
	public ?int $pixelheight = null;
	public ?int $pixelwidth = null;
	public string $downloadurl;
}
