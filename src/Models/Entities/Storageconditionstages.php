<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditionstages PS-API type 
 * @generated 2021-08-24
 **/
class Storageconditionstages extends AbstractEntity
{
	/**
	 * From which moment on do these storage conditions apply? As of production, after opening, etc
	 * Logistic/Storagecondition/Stage
	 * 
	 * @var Storageconditionstage[]
	 */
	public array $storageconditionstage;
}
