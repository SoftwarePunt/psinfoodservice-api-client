<?php

namespace SoftwarePunt\PSAPI\Models\Responses;

class CollectionItem
{
    protected \SimpleXMLElement $xml;

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->xml = $xml;
    }

    public function getString(string $xpath): ?string
    {
        $result = $this->xml->xpath($xpath)[0] ?? null;

        if ($result === null)
            return null;

        $str = (string)$result[0];

        if (!$str || empty(trim($str))) {
            // String and enum values are typically expressed under a "value" sub element in PS-API responses
            if (!str_ends_with("/value", $result)) {
                return $this->getString("{$xpath}/value");
            }
            return null;
        }

        return $str;
    }
}