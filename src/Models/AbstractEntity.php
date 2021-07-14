<?php

namespace SoftwarePunt\PSAPI\Models;

use SoftwarePunt\PSAPI\Models\Responses\ResponseElement;

abstract class AbstractEntity
{
    public function fillFromItem(ResponseElement $item, ?string $prefix = null): void
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
                        "string" => $item->getString($itemKey),
                        "int" => $item->getInt($itemKey),
                        "float" => $item->getFloat($itemKey),
                        "bool" => $item->getBool($itemKey),
                        "DateTime" => $item->getDateTime($itemKey)
                    };
                } catch (\UnhandledMatchError) {
                    $isObjectArray = false;

                    // Handle object array with phpdoc type hint
                    if ($propTypeName === "array") {
                        if (preg_match('/@var\s+([^\s]+)/', $rfProp->getDocComment(), $matches)) {
                            list(, $propTypeName) = $matches;
                            $propTypeName = "SoftwarePunt\PSAPI\Models\Entities\\" . rtrim($propTypeName, '[]');
                            $isObjectArray = true;
                        }
                    }

                    // Handle object value types
                    if (class_exists($propTypeName)) {
                        if (is_subclass_of($propTypeName, "SoftwarePunt\PSAPI\Models\AbstractEntity")) {
                            // AbstractEntity sub-type(s)
                            if ($isObjectArray) {
                                $subItems = $item->getItems($propName);
                                $itemValue = [];

                                foreach ($subItems as $subItem) {
                                    /**
                                     * @var $itemValue AbstractEntity
                                     */
                                    $subItemValue = new $propTypeName();
                                    $subItemValue->fillFromItem($subItem);
                                    $itemValue[] = $subItemValue;
                                }
                            } else {
                                $subItem = $item->getItem($propName);

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
            }

            if ($itemValue !== null) {
                $this->$propName = $itemValue;
            } else if ($propType->allowsNull()) {
                $this->$propName = null;
            }
        }
    }
}