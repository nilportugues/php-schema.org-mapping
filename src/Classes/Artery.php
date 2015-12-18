<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ArterialBranch;
use NilPortugues\SchemaOrg\Properties\AssociatedPathophysiology;
use NilPortugues\SchemaOrg\Properties\BodyLocation;
use NilPortugues\SchemaOrg\Properties\ConnectedTo;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Diagram;
use NilPortugues\SchemaOrg\Properties\Function;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PartOfSystem;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\RelatedCondition;
use NilPortugues\SchemaOrg\Properties\RelatedTherapy;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Source;
use NilPortugues\SchemaOrg\Properties\SubStructure;
use NilPortugues\SchemaOrg\Properties\SupplyTo;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes Artery
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A type of blood vessel that specifically carries blood away from the heart.
 */
class Artery
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Artery";

   /**
    * Returns the URL of the current definition at http://schema.org
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
    public static function arterialBranch()
    {
        return ArterialBranch::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function associatedPathophysiology()
    {
        return AssociatedPathophysiology::create(AnatomicalStructure::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function bodyLocation()
    {
        return BodyLocation::create(AnatomicalStructure::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function connectedTo()
    {
        return ConnectedTo::create(AnatomicalStructure::schemaUrl());
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
    public static function diagram()
    {
        return Diagram::create(AnatomicalStructure::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function function()
    {
        return Function::create(AnatomicalStructure::schemaUrl());
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
    public static function partOfSystem()
    {
        return PartOfSystem::create(AnatomicalStructure::schemaUrl());
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
    public static function relatedCondition()
    {
        return RelatedCondition::create(AnatomicalStructure::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function relatedTherapy()
    {
        return RelatedTherapy::create(AnatomicalStructure::schemaUrl());
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
    public static function source()
    {
        return Source::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function subStructure()
    {
        return SubStructure::create(AnatomicalStructure::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function supplyTo()
    {
        return SupplyTo::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}