<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IssuedByProperty;
use NilPortugues\SchemaOrg\Properties\IssuedThroughProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PermitAudienceProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\ValidForProperty;
use NilPortugues\SchemaOrg\Properties\ValidFromProperty;
use NilPortugues\SchemaOrg\Properties\ValidInProperty;
use NilPortugues\SchemaOrg\Properties\ValidUntilProperty;

/**
 * Classes Permit.
 */
class Permit
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Permit';

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
    public static function issuedBy()
    {
        return IssuedByProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function issuedThrough()
    {
        return IssuedThroughProperty::create(self::schemaUrl());
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
    public static function permitAudience()
    {
        return PermitAudienceProperty::create(self::schemaUrl());
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
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validFor()
    {
        return ValidForProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validFrom()
    {
        return ValidFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validIn()
    {
        return ValidInProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validUntil()
    {
        return ValidUntilProperty::create(self::schemaUrl());
    }
}
