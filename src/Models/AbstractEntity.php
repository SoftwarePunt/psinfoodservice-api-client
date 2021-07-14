<?php

namespace SoftwarePunt\PSAPI\Models;

use SoftwarePunt\PSAPI\Models\Responses\CollectionItem;

abstract class AbstractEntity
{
    public function fillFromItem(CollectionItem $collectionItem, ?string $prefix)
    {
        $className = get_called_class();
        $rfClass = new \ReflectionClass($className);

        foreach ($rfClass->getProperties(\ReflectionProperty::IS_PUBLIC) as $rfProp) {
            $propName = $rfProp->name;
            $propType = $rfProp->getType();

            $itemKey = ($prefix ?? "") . strtolower($propName);

            $itemValue = match ((string)$propType) {
                default => $collectionItem->getString($itemKey),
                "int" => $collectionItem->getInt($itemKey),
                "float" => $collectionItem->getFloat($itemKey),
                "bool" => $collectionItem->getBool($itemKey),
                "DateTime" => $collectionItem->getDateTime($itemKey)
            };

            if ($itemValue !== null) {
                $this->$propName = $itemValue;
            } else if ($propType->allowsNull()) {
                $this->$propName = null;
            }
        }
    }
}