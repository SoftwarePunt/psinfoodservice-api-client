<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Ingredientset PS-API type 
 * @generated 2021-07-14
 **/
class Ingredientset extends AbstractEntity
{
	public ?string $ingredientcomment = null;
	public ?bool $isgmofree = null;
	public ?bool $isirradiated = null;
	public ?string $ingredientdeclaration = null;
	public ?string $ingredientdeclarationpreview = null;
	public ?string $gs1ingredientallergensummary = null;
}
