<?php

namespace SoftwarePunt\PSAPI\Models\Responses;

class ResponseElement
{
    protected \SimpleXMLElement $xml;

    public function __construct(\SimpleXMLElement $xml)
    {
        $this->xml = $xml;
    }

    public function getElement(string $xpath): ?\SimpleXMLElement
    {
        return $this->xml->xpath($xpath)[0] ?? null;
    }

    public function getItem(string $xpath): ?ResponseElement
    {
        $element = $this->getElement($xpath);

        if ($element === null)
            return null;

        return new ResponseElement($element);
    }

    /**
     * @param string $xpath
     * @return array|ResponseElement[]|null
     */
    public function getItems(string $xpath): ?array
    {
        $elements = $this->xml->xpath($xpath);

        $results = [];
        foreach ($elements as $element)
            $results[] = new ResponseElement($element);
        return $results;
    }

    public function getString(string $xpath): ?string
    {
        $element = $this->getElement($xpath);

        if ($element === null)
            return null;

        $str = (string)$element[0];

        if (!$str || empty(trim($str))) {
            // String and enum values are typically expressed under a "value" sub element in PS-API responses
            if (!str_ends_with("/value", $element)) {
                return $this->getString("{$xpath}/value");
            }
            return null;
        }

        return $str;
    }

    public function getInt(string $xpath): ?int
    {
        $str = $this->getString($xpath);

        if ($str === null)
            return null;

        return intval($str);
    }

    public function getFloat(string $xpath): ?float
    {
        $str = $this->getString($xpath);

        if ($str === null)
            return null;

        return floatval($str);
    }

    public function getBool(string $xpath): bool
    {
        $str = $this->getString($xpath);

        return $str &&
            ($str !== "0" || strtolower($str) !== "false");
    }

    public function getDateTime(string $xpath): ?\DateTime
    {
        $str = $this->getString($xpath);

        if ($str === null)
            return null;

        try {
            return new \DateTime($str);
        } catch (\Exception $ex) {
            return null;
        }
    }
}