<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\MaxValueProperty;
use NilPortugues\SchemaOrg\Properties\MinValueProperty;
use NilPortugues\SchemaOrg\Properties\PropertyIDProperty;
use NilPortugues\SchemaOrg\Properties\UnitCodeProperty;
use NilPortugues\SchemaOrg\Properties\UnitTextProperty;
use NilPortugues\SchemaOrg\Properties\ValueProperty;
use NilPortugues\SchemaOrg\Properties\ValueReferenceProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes PropertyValue.
 */
class PropertyValue extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PropertyValue';

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
