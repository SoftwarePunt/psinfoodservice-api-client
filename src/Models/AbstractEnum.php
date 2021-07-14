<?php

namespace SoftwarePunt\PSAPI\Models;

abstract class AbstractEnum
{
    private static array $constCacheArray = [];

    /**
     * @return array An array of constants, where the keys hold the name and the values the value of the constants.
     */
    public static function all(): array
    {
        $className = get_called_class();

        if (!isset(self::$constCacheArray[$className])) {
            self::$constCacheArray[$className] = (new \ReflectionClass($className))
                ->getConstants(\ReflectionClassConstant::IS_PUBLIC);
        }

        return self::$constCacheArray[$className];
    }

    public static function keys(): array
    {
        return array_keys(self::all());
    }

    public static function values(): array
    {
        return array_values(self::all());
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values());
    }
}