<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\DefaultValueProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MaxValueProperty;
use NilPortugues\SchemaOrg\Properties\MinValueProperty;
use NilPortugues\SchemaOrg\Properties\MultipleValuesProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ReadonlyValueProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\StepValueProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\ValueMaxLengthProperty;
use NilPortugues\SchemaOrg\Properties\ValueMinLengthProperty;
use NilPortugues\SchemaOrg\Properties\ValueNameProperty;
use NilPortugues\SchemaOrg\Properties\ValuePatternProperty;
use NilPortugues\SchemaOrg\Properties\ValueRequiredProperty;

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
    public static function defaultValue()
    {
        return DefaultValueProperty::create(self::schemaUrl());
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
    public static function multipleValues()
    {
        return MultipleValuesProperty::create(self::schemaUrl());
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
    public static function readonlyValue()
    {
        return ReadonlyValueProperty::create(self::schemaUrl());
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
    public static function stepValue()
    {
        return StepValueProperty::create(self::schemaUrl());
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
    public static function valueMaxLength()
    {
        return ValueMaxLengthProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueMinLength()
    {
        return ValueMinLengthProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueName()
    {
        return ValueNameProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valuePattern()
    {
        return ValuePatternProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function valueRequired()
    {
        return ValueRequiredProperty::create(self::schemaUrl());
    }
}
