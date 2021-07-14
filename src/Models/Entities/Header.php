<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Header PS-API type 
 * @generated 2021-07-14
 **/
class Header extends AbstractEntity
{
	public string $provider;
	public ?string $disclaimer = null;
	public string $version;
	public ?int $totalrowcount = null;
	public ?int $executiontime = null;
	public ?\DateTime $executiondatetime = null;
	public ?string $senderGLN = null;
	public ?string $receiverGLN = null;
	public ?int $testIndicator = null;
	public ?string $transactionRef = null;
	public bool $updateproductinfo;
	public bool $updatespecificationinfo;
	public bool $updatecommercialinfo;
	public bool $updatelogisticinfo;
}
