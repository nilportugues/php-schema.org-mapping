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
use NilPortugues\SchemaOrg\Properties\AreaServedProperty;
use NilPortugues\SchemaOrg\Properties\AvailableLanguageProperty;
use NilPortugues\SchemaOrg\Properties\ContactOptionProperty;
use NilPortugues\SchemaOrg\Properties\ContactTypeProperty;
use NilPortugues\SchemaOrg\Properties\EmailProperty;
use NilPortugues\SchemaOrg\Properties\FaxNumberProperty;
use NilPortugues\SchemaOrg\Properties\HoursAvailableProperty;
use NilPortugues\SchemaOrg\Properties\ProductSupportedProperty;
use NilPortugues\SchemaOrg\Properties\ServiceAreaProperty;
use NilPortugues\SchemaOrg\Properties\TelephoneProperty;

/**
 * Classes ContactPoint.
 */
class ContactPoint
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/ContactPoint';

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
    public static function areaServed()
    {
        return AreaServedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableLanguage()
    {
        return AvailableLanguageProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactOption()
    {
        return ContactOptionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactType()
    {
        return ContactTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function email()
    {
        return EmailProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function faxNumber()
    {
        return FaxNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hoursAvailable()
    {
        return HoursAvailableProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productSupported()
    {
        return ProductSupportedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceArea()
    {
        return ServiceAreaProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return TelephoneProperty::create(self::schemaUrl());
    }
}
