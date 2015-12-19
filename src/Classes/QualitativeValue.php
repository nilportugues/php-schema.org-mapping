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
use NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty;
use NilPortugues\SchemaOrg\Properties\EqualProperty;
use NilPortugues\SchemaOrg\Properties\GreaterOrEqualProperty;
use NilPortugues\SchemaOrg\Properties\GreaterProperty;
use NilPortugues\SchemaOrg\Properties\LesserOrEqualProperty;
use NilPortugues\SchemaOrg\Properties\LesserProperty;
use NilPortugues\SchemaOrg\Properties\NonEqualProperty;
use NilPortugues\SchemaOrg\Properties\ValueReferenceProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes QualitativeValue.
 */
class QualitativeValue extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/QualitativeValue';

    /**
     * @return Mapping
     */
    public static function additionalProperty()
    {
        return AdditionalPropertyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function equal()
    {
        return EqualProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function greater()
    {
        return GreaterProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function greaterOrEqual()
    {
        return GreaterOrEqualProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lesser()
    {
        return LesserProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function lesserOrEqual()
    {
        return LesserOrEqualProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function nonEqual()
    {
        return NonEqualProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueReference()
    {
        return ValueReferenceProperty::create(self::schemaUrl());
    }
}
