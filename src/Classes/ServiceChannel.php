<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AvailableLanguageProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProcessingTimeProperty;
use NilPortugues\SchemaOrg\Properties\ProvidesServiceProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\ServiceLocationProperty;
use NilPortugues\SchemaOrg\Properties\ServicePhoneProperty;
use NilPortugues\SchemaOrg\Properties\ServicePostalAddressProperty;
use NilPortugues\SchemaOrg\Properties\ServiceSmsNumberProperty;
use NilPortugues\SchemaOrg\Properties\ServiceUrlProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes ServiceChannel.
 */
class ServiceChannel
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/ServiceChannel';

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
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
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
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function processingTime()
    {
        return ProcessingTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function providesService()
    {
        return ProvidesServiceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceLocation()
    {
        return ServiceLocationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function servicePhone()
    {
        return ServicePhoneProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function servicePostalAddress()
    {
        return ServicePostalAddressProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceSmsNumber()
    {
        return ServiceSmsNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceUrl()
    {
        return ServiceUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
