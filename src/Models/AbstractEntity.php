<?php

namespace SoftwarePunt\PSAPI\Models;

use SoftwarePunt\PSAPI\Models\Responses\ResponseElement;

abstract class AbstractEntity
{
    public function fillFromItem(ResponseElement $collectionItem, ?string $prefix = null): void
    {
        $className = get_called_class();
        $rfClass = new \ReflectionClass($className);

        foreach ($rfClass->getProperties(\ReflectionProperty::IS_PUBLIC) as $rfProp) {
            $propName = $rfProp->name;
            $propType = $rfProp->getType();
            $propTypeName = $propType ? $propType->getName() : null;

            $itemKey = ($prefix ?? "") . strtolower($propName);
            $itemValue = null;

            if ($propType && $propTypeName) {
                try {
                    // Handle primitive value types
                    $itemValue = match ($propTypeName) {
                        "string" => $collectionItem->getString($itemKey),
                        "int" => $collectionItem->getInt($itemKey),
                        "float" => $collectionItem->getFloat($itemKey),
                        "bool" => $collectionItem->getBool($itemKey),
                        "DateTime" => $collectionItem->getDateTime($itemKey)
                    };
                } catch (\UnhandledMatchError) {
                    // Handle object value types
                    if (class_exists($propTypeName)) {
                        if (is_subclass_of($propTypeName, "SoftwarePunt\PSAPI\Models\AbstractEntity")) {
                            // AbstractEntity sub-type
                            $subItem = $collectionItem->getItem($propName);

                            if ($subItem) {
                                /**
                                 * @var $itemValue AbstractEntity
                                 */
                                $itemValue = new $propTypeName();
                                $itemValue->fillFromItem($subItem);
                            }
                        }
                    }
                }
            }

            if ($itemValue !== null) {
                $this->$propName = $itemValue;
            } else if ($propType->allowsNull()) {
                $this->$propName = null;
            }
        }
    }
}