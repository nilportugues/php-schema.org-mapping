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
use NilPortugues\SchemaOrg\Properties\AmountOfThisGoodProperty;
use NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty;
use NilPortugues\SchemaOrg\Properties\TypeOfGoodProperty;
use NilPortugues\SchemaOrg\Properties\UnitCodeProperty;
use NilPortugues\SchemaOrg\Properties\UnitTextProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes TypeAndQuantityNode.
 */
class TypeAndQuantityNode extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TypeAndQuantityNode';

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
