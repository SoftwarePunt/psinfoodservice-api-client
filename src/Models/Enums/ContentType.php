<?php

namespace SoftwarePunt\PSAPI\Models\Enums;

use SoftwarePunt\PSAPI\Models\AbstractEnum;

/**
 * Different type of return formats. Due to our caching mechanism only XML is at the moment supported.
 */
class ContentType extends AbstractEnum
{
    /**
     * If unknown the default will be chosen (XML)
     */
    public const Unknown = 0;
    /**
     * The return type is the PS-XML. An XSD can be found in the documentation of the PS-API
     */
    public const Xml = 1;
}