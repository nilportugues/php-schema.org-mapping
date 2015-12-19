<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AmountOfThisGoodProperty;
use NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty;
use NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty;
use NilPortugues\SchemaOrg\Properties\UnitCodeProperty;
use NilPortugues\SchemaOrg\Properties\UnitTextProperty;

/**
 * Classes TypeAndQuantityNode.
 */
class TypeAndQuantityNode
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/TypeAndQuantityNode';

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
    public static function amountOfThisGood()
    {
        return AmountOfThisGoodProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function businessFunction()
    {
        return BusinessFunctionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typeOfGood()
    {
        return TypeOfGoodProperty::create(self::schemaUrl());
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
}
