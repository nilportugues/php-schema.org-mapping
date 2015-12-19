<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AssociatedPathophysiologyProperty;
use NilPortugues\SchemaOrg\Properties\BodyLocationProperty;
use NilPortugues\SchemaOrg\Properties\ConnectedToProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DiagramProperty;
use NilPortugues\SchemaOrg\Properties\FunctionTypeProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OriginatesFromProperty;
use NilPortugues\SchemaOrg\Properties\PartOfSystemProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\RegionDrainedProperty;
use NilPortugues\SchemaOrg\Properties\RelatedConditionProperty;
use NilPortugues\SchemaOrg\Properties\RelatedTherapyProperty;
use NilPortugues\SchemaOrg\Properties\RunsToProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SubStructureProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes LymphaticVessel.
 */
class LymphaticVessel
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/LymphaticVessel';

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
    public static function associatedPathophysiology()
    {
        return AssociatedPathophysiologyProperty::create(AnatomicalStructure::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function bodyLocation()
    {
        return BodyLocationProperty::create(AnatomicalStructure::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function connectedTo()
    {
        return ConnectedToProperty::create(AnatomicalStructure::schemaUrl());
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
    public static function diagram()
    {
        return DiagramProperty::create(AnatomicalStructure::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function functionType()
    {
        return FunctionTypeProperty::create(AnatomicalStructure::schemaUrl());
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
    public static function originatesFrom()
    {
        return OriginatesFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function partOfSystem()
    {
        return PartOfSystemProperty::create(AnatomicalStructure::schemaUrl());
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
    public static function regionDrained()
    {
        return RegionDrainedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relatedCondition()
    {
        return RelatedConditionProperty::create(AnatomicalStructure::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function relatedTherapy()
    {
        return RelatedTherapyProperty::create(AnatomicalStructure::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function runsTo()
    {
        return RunsToProperty::create(self::schemaUrl());
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
    public static function subStructure()
    {
        return SubStructureProperty::create(AnatomicalStructure::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
