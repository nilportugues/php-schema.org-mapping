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
use NilPortugues\SchemaOrg\Properties\CaloriesProperty;
use NilPortugues\SchemaOrg\Properties\CarbohydrateContentProperty;
use NilPortugues\SchemaOrg\Properties\CholesterolContentProperty;
use NilPortugues\SchemaOrg\Properties\FatContentProperty;
use NilPortugues\SchemaOrg\Properties\FiberContentProperty;
use NilPortugues\SchemaOrg\Properties\ProteinContentProperty;
use NilPortugues\SchemaOrg\Properties\SaturatedFatContentProperty;
use NilPortugues\SchemaOrg\Properties\ServingSizeProperty;
use NilPortugues\SchemaOrg\Properties\SodiumContentProperty;
use NilPortugues\SchemaOrg\Properties\SugarContentProperty;
use NilPortugues\SchemaOrg\Properties\TransFatContentProperty;
use NilPortugues\SchemaOrg\Properties\UnsaturatedFatContentProperty;

/**
 * Classes NutritionInformation.
 */
class NutritionInformation
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/NutritionInformation';

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
    public static function calories()
    {
        return CaloriesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function carbohydrateContent()
    {
        return CarbohydrateContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function cholesterolContent()
    {
        return CholesterolContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fatContent()
    {
        return FatContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fiberContent()
    {
        return FiberContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function proteinContent()
    {
        return ProteinContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function saturatedFatContent()
    {
        return SaturatedFatContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function servingSize()
    {
        return ServingSizeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sodiumContent()
    {
        return SodiumContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sugarContent()
    {
        return SugarContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function transFatContent()
    {
        return TransFatContentProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function unsaturatedFatContent()
    {
        return UnsaturatedFatContentProperty::create(self::schemaUrl());
    }
}
