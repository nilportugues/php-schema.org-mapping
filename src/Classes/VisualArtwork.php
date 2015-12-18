<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ArtEdition;
use NilPortugues\SchemaOrg\Properties\ArtMedium;
use NilPortugues\SchemaOrg\Properties\Artform;
use NilPortugues\SchemaOrg\Properties\ArtworkSurface;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Material;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Surface;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes VisualArtwork
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A work of art that is primarily visual in character.
 */
class VisualArtwork
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/VisualArtwork";

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
    public static function artEdition()
    {
        return ArtEdition::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function artMedium()
    {
        return ArtMedium::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function artform()
    {
        return Artform::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function artworkSurface()
    {
        return ArtworkSurface::create(self::schemaUrl());
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
    public static function material()
    {
        return Material::create(self::schemaUrl());
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
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function surface()
    {
        return Surface::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}