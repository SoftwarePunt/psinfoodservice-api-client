<?php

namespace SoftwarePunt\PSAPI\Models;

use SoftwarePunt\PSAPI\Models\Enums\ContentType;

abstract class AbstractParams
{
    // -----------------------------------------------------------------------------------------------------------------
    // Common params

    /**
     * Determines how many items should be skipped (default=0).
     */
    public int $Skip = 0;
    /**
     * Detemines how many items should be taken (default=10).
     */
    public int $Take = 10;
    /**
     * Could be Unknown or Xml
     */
    public int $ReturnContentType = ContentType::Xml;

    // -----------------------------------------------------------------------------------------------------------------
    // API

    /**
     * Gets a key-value array of all params properties that have been set.
     * The output can be used for the POST data in a PS-API request.
     *
     * @return array
     */
    public function toPostData(): array
    {
        $values = [];

        $className = get_called_class();
        $rfClass = new \ReflectionClass($className);

        foreach ($rfClass->getProperties(\ReflectionProperty::IS_PUBLIC) as $rfProp) {
            $propName = $rfProp->name;

            if (!isset($this->$propName))
                continue;

            $value = $this->$propName;

            if (is_bool($value)) {
                // PS-API does not allow 1/0 booleans
                $value = $value ? "true" : "false";
            }

            $values[$propName] = $value;
        }

        return $values;
    }
}