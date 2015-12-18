<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
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
use NilPortugues\SchemaOrg\Properties\SubStructure;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes AnatomicalStructure
 * @package NilPortugues\SchemaOrg\Classes
 *
 * Any part of the human body, typically a component of an anatomical system. Organs, tissues, and cells are all anatomical structures.
 */
class AnatomicalStructure
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/AnatomicalStructure";

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
    public static function associatedPathophysiology()
    {
        return AssociatedPathophysiology::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function bodyLocation()
    {
        return BodyLocation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function connectedTo()
    {
        return ConnectedTo::create(self::schemaUrl());
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
        return Diagram::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function function()
    {
        return Function::create(self::schemaUrl());
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
        return PartOfSystem::create(self::schemaUrl());
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
        return RelatedCondition::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function relatedTherapy()
    {
        return RelatedTherapy::create(self::schemaUrl());
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
    public static function subStructure()
    {
        return SubStructure::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}