<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\MaxValueProperty;
use NilPortugues\SchemaOrg\Properties\MinValueProperty;
use NilPortugues\SchemaOrg\Properties\PropertyIDProperty;
use NilPortugues\SchemaOrg\Properties\UnitCodeProperty;
use NilPortugues\SchemaOrg\Properties\UnitTextProperty;
use NilPortugues\SchemaOrg\Properties\ValueProperty;
use NilPortugues\SchemaOrg\Properties\ValueReferenceProperty;

/**
 * Classes PropertyValue.
 */
class PropertyValue
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PropertyValue';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function maxValue()
    {
        return MaxValueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function minValue()
    {
        return MinValueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function propertyID()
    {
        return PropertyIDProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function unitCode()
    {
        return UnitCodeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function unitText()
    {
        return UnitTextProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function value()
    {
        return ValueProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueReference()
    {
        return ValueReferenceProperty::create(self::schemaUrl());
    }
}
