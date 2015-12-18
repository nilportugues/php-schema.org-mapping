<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\DefaultValue;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MaxValue;
use NilPortugues\SchemaOrg\Properties\MinValue;
use NilPortugues\SchemaOrg\Properties\MultipleValues;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ReadonlyValue;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\StepValue;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\ValueMaxLength;
use NilPortugues\SchemaOrg\Properties\ValueMinLength;
use NilPortugues\SchemaOrg\Properties\ValueName;
use NilPortugues\SchemaOrg\Properties\ValuePattern;
use NilPortugues\SchemaOrg\Properties\ValueRequired;

/**
 * Classes PropertyValueSpecification.
 */
class PropertyValueSpecification
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/PropertyValueSpecification';

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
    public static function defaultValue()
    {
        return DefaultValue::create(self::schemaUrl());
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
    public static function maxValue()
    {
        return MaxValue::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function minValue()
    {
        return MinValue::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function multipleValues()
    {
        return MultipleValues::create(self::schemaUrl());
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
    public static function readonlyValue()
    {
        return ReadonlyValue::create(self::schemaUrl());
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
    public static function stepValue()
    {
        return StepValue::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueMaxLength()
    {
        return ValueMaxLength::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueMinLength()
    {
        return ValueMinLength::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueName()
    {
        return ValueName::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valuePattern()
    {
        return ValuePattern::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueRequired()
    {
        return ValueRequired::create(self::schemaUrl());
    }
}
