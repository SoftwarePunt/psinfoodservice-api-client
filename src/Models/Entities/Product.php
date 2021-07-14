<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Product PS-API type 
 * @generated 2021-07-14
 **/
class Product extends AbstractEntity
{
	public ?Productsummary $summary = null;
	public ?Productinfolist $productinfolist = null;
	public ?Specificationinfolist $specificationinfolist = null;
	public ?Commercialinfolist $commercialinfolist = null;
	public ?Logisticinfolist $logisticinfolist = null;
	public ?bool $ismixpackage = null;
}
