<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AreaServed;
use NilPortugues\SchemaOrg\Properties\AvailableLanguage;
use NilPortugues\SchemaOrg\Properties\ContactOption;
use NilPortugues\SchemaOrg\Properties\ContactType;
use NilPortugues\SchemaOrg\Properties\Email;
use NilPortugues\SchemaOrg\Properties\FaxNumber;
use NilPortugues\SchemaOrg\Properties\HoursAvailable;
use NilPortugues\SchemaOrg\Properties\ProductSupported;
use NilPortugues\SchemaOrg\Properties\ServiceArea;
use NilPortugues\SchemaOrg\Properties\Telephone;

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
        return AreaServed::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableLanguage()
    {
        return AvailableLanguage::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactOption()
    {
        return ContactOption::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function contactType()
    {
        return ContactType::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function email()
    {
        return Email::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function faxNumber()
    {
        return FaxNumber::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hoursAvailable()
    {
        return HoursAvailable::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function productSupported()
    {
        return ProductSupported::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceArea()
    {
        return ServiceArea::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function telephone()
    {
        return Telephone::create(self::schemaUrl());
    }
}
