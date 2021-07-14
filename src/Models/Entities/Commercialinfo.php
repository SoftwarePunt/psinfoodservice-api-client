<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Commercialinfo PS-API type 
 * @generated 2021-07-14
 **/
class Commercialinfo extends AbstractEntity
{
	/**
	 * Internal commercialproductid
	 */
	public int $id;
	/**
	 * Productname, short and clear
	 * GeneralInformation/BasicInfo/Name
	 */
	public string $name;
	/**
	 * Prescribed, regulated product name as shown on the label
	 * GeneralInformation/BasicInfo/Legal name
	 */
	public ?string $legalname = null;
	/**
	 * Describe how the item is used and answer the question ‘What is it?’. Example: Soup, Snack, Sauce. Max. 35 characters.
	 * GeneralInformation/BasicInfo/Functional name
	 */
	public ?string $functionalname = null;
	/**
	 * Text that describes the variant (e.g. taste or smell) of a product. For example for soup: chicken, tomato. Use up to 35 characters. In this field you may not use abbreviations.
	 * GeneralInformation/BasicInfo/Variant description
	 */
	public ?string $variantdescription = null;
	/**
	 * Brandname printed on the label
	 * GeneralInformation/BasicInfo/Brand
	 */
	public ?Brand $brand = null;
	public ?int $producerid = null;
	public ?string $producername = null;
	public ?string $producergln = null;
	/**
	 * GPC (Global Product Code) is a worldwide classification code
	 * GeneralInformation/Groups/GPC
	 */
	public ?int $globalproductclassificationid = null;
	/**
	 * GPC (Global Product Code) is a worldwide classification code of 8 digits (Brickcode)
	 * GeneralInformation/Groups/GPC
	 */
	public ?string $globalproductclassificationname = null;
	/**
	 * GPC (Global Product Code) is a worldwide classification code of 8 digits (Brickcode)
	 * GeneralInformation/Groups/GPC
	 */
	public ?string $globalproductclassificationcode = null;
	/**
	 * Product is available from this date on
	 * GeneralInformation/Date/Valid from
	 */
	public ?\DateTime $validfrom = null;
	/**
	 * Visible on Foodbook till this date
	 * GeneralInformation/Date/Valid from
	 */
	public ?\DateTime $validto = null;
	/**
	 * Date on which the product ceases to be available for ordering.
	 * GeneralInformation/Date/End availability date
	 */
	public ?\DateTime $endavailabilitydate = null;
	/**
	 * Describe your product in max 1 line
	 * 1Information/Story/Short description
	 */
	public ?string $description = null;
	/**
	 * The title of the commercial story
	 * Title of commercialstory
	 */
	public ?string $commercialstorytitle = null;
	/**
	 * Tell the story of your product
	 * The commercialstory
	 */
	public ?string $commercialstorytext = null;
	public ?\DateTime $lastupdatedon = null;
}
