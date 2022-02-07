<?php

namespace SoftwarePunt\PSAPI\Models\Entities;

use SoftwarePunt\PSAPI\Models\AbstractEntity;

/**
 * Brandupdate PS-API type 
 * @generated 2022-02-07
 **/
class Brandupdate extends AbstractEntity
{
	/**
	 * The id of the brand. Use 0 for a new brand
	 */
	public int $id;
	/**
	 * The name of the brand. Must be unique within the PS database.
	 */
	public string $name;
	/**
	 * Your identification to this brand.
	 */
	public string $thirdpartyid;
	/**
	 * Is this brand a private label.
	 */
	public bool $isprivatelabel;
	/**
	 * Is the brand publiclyvisible, applies to the PS foodbook.
	 */
	public bool $ispubliclyvisible;
	/**
	 * Is used in the PS foodbook to substitude the text between { and }. e.g. 2 will make text between { } appear in bold on the PS foodbook.
	 */
	public ?int $declarationformattypeid = null;
	/**
	 * If this is set, this brand will be shown in the producer details page on the PS foodbook
	 */
	public ?bool $isvisibleinproducerdetail = null;
	/**
	 * If set, producers are allowed to publish specifications on this brand. Only applied to private label brands, where you are not the producer.
	 */
	public ?bool $allowproducerstopublishspecification = null;
	/**
	 * If set, the percentage will be infront of the ingredients when having ingredients masterdata. Does not apply to ingredientdeclaration.
	 */
	public ?bool $ingredientpercentageinfront = null;
	/**
	 * Forcess a producer to approve specifications. If producer equals brandowner, with this set to off, the step for approve is skipped and specifications go from mutation directly to published.
	 */
	public ?bool $producermustapprovespecification = null;
}
