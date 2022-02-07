<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Assetinfo PS-API type 
 * @generated 2022-02-07
 **/
class Assetinfo extends AbstractEntity
{
	public int $id;
	public int $typeid;
	public ?string $typename = null;
	public int $labelid;
	public ?string $labelname = null;
	public ?int $formattypeid = null;
	public ?string $formattypename = null;
	public ?int $facingtypeid = null;
	public ?string $facingtypename = null;
	public ?int $angletypeid = null;
	public ?string $angletypename = null;
	public ?string $title = null;
	public ?string $downloadurl = null;
	/**
	 * Show the extension type of the downloadable file
	 */
	public ?string $downloadextension = null;
	public ?string $hyperlink = null;
	public ?string $externalreferenceid = null;
	public ?\DateTime $expirationdate = null;
	public ?bool $istransparant = null;
	public ?bool $ispubliclyavailable = null;
	public ?bool $isdefault = null;
	public ?string $availableincultures = null;
	public ?bool $isheroimage = null;
}
