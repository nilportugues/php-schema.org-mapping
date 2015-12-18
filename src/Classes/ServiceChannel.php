<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\AvailableLanguage;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProcessingTime;
use NilPortugues\SchemaOrg\Properties\ProvidesService;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\ServiceLocation;
use NilPortugues\SchemaOrg\Properties\ServicePhone;
use NilPortugues\SchemaOrg\Properties\ServicePostalAddress;
use NilPortugues\SchemaOrg\Properties\ServiceSmsNumber;
use NilPortugues\SchemaOrg\Properties\ServiceUrl;
use NilPortugues\SchemaOrg\Properties\Url;

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
        return AdditionalType::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
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
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function processingTime()
    {
        return ProcessingTime::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function providesService()
    {
        return ProvidesService::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceLocation()
    {
        return ServiceLocation::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function servicePhone()
    {
        return ServicePhone::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function servicePostalAddress()
    {
        return ServicePostalAddress::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceSmsNumber()
    {
        return ServiceSmsNumber::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceUrl()
    {
        return ServiceUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
