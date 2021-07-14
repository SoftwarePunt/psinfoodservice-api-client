<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Storageconditionset PS-API type 
 * @generated 2021-07-14
 **/
class Storageconditionset extends AbstractEntity
{
	public ?string $comment = null;
	/**
	 * Describes how the user should use this product? E.g. Shake before use
	 * Logistic/Storagcondition/Additional/Usage instructions
	 */
	public ?string $usageinstructionlabel = null;
	/**
	 * Describes how the product should be stored? E.g. Keep cool
	 * Logistic/Storagcondition/Additional/Storage instructions
	 */
	public ?string $storageinstructionlabel = null;
	/**
	 * Id of preservationtechnique applied on this product, found in masters
	 * id in masters.preservationtechniques
	 */
	public ?int $preservationtechniqueid = null;
	/**
	 * Preservationtechnique applied on this product
	 * Logistic/Storagcondition/Additional/Preservation technique
	 */
	public ?string $preservationtechniquename = null;
	/**
	 * Preservationtechnique applied on this product
	 * Logistic/Storagcondition/Additional/Preservation technique
	 */
	public ?string $shelflifelocationtext = null;
	/**
	 * Preservationtechnique applied on this product
	 * Logistic/Storagcondition/Additional/Preservation technique
	 */
	public ?int $shelflifeid = null;
	public ?Storageconditionstageinfolist $storageconditionstageinfolist = null;
}
