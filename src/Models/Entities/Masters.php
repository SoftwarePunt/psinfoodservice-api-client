<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Masters PS-API type 
 * @generated 2021-08-24
 **/
class Masters extends AbstractEntity
{
	public ?Allergens $allergens = null;
	public ?Countries $countries = null;
	public ?Levelofcontainments $levelofcontainments = null;
	public ?Measurementprecisions $measurementprecisions = null;
	public ?Microbiologicalorganisms $microbiologicalorganisms = null;
	public ?Microbiologicalstages $microbiologicalstages = null;
	public ?Nutrients $nutrients = null;
	public ?Organolepticcharacteristics $organolepticcharacteristics = null;
	public ?Labelcontacttypes $labelcontacttypes = null;
	public ?Packagedproducttypes $packagedproducttypes = null;
	public ?Packagingtypes $packagingtypes = null;
	public ?Packagingmaterials $packagingmaterials = null;
	public ?Preparationtypes $preparationtypes = null;
	public ?Periods $periods = null;
	public ?Physiochemicalcharacteristics $physiochemicalcharacteristics = null;
	public ?Preservationtechniques $preservationtechniques = null;
	public ?Qualitymarks $qualitymarks = null;
	public ?Stateofpreparations $stateofpreparations = null;
	/**
	 * The product should be stored using these conditions.
	 * Logistic/Storagecondition/Storage condition
	 */
	public ?Storageconditions $storageconditions = null;
	public ?Storageconditionstages $storageconditionstages = null;
	public ?Taxrateapplicabilities $taxrateapplicabilities = null;
	public ?Unitsofmeasurement $unitsofmeasurement = null;
	public ?Globalproductclassifications $globalproductclassifications = null;
	public ?Targetmarkets $targetmarkets = null;
	public ?Fishcatchzones $fishcatchzones = null;
	public ?Fishcapturemethods $fishcapturemethods = null;
	public ?Scientificfishnames $scientificfishnames = null;
	public ?Assettypes $assettypes = null;
	public ?Assetfacingtypes $assetfacingtypes = null;
	public ?Assetangletypes $assetangletypes = null;
	public ?Assetformattypes $assetformattypes = null;
	public ?Assetlabels $assetlabels = null;
	public ?Cultures $cultures = null;
	public ?Productgroups $productgroups = null;
	public ?Nutritionalinformationproviders $nutritionalinformationproviders = null;
	public ?Shelflifes $shelflifes = null;
	public ?Characteristics $characteristics = null;
	public ?Alternativegtins $alternativegtins = null;
	public ?Iddsis $iddsis = null;
}
