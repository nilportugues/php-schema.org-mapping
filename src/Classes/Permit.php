<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\IssuedBy;
use NilPortugues\SchemaOrg\Properties\IssuedThrough;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PermitAudience;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\ValidFor;
use NilPortugues\SchemaOrg\Properties\ValidFrom;
use NilPortugues\SchemaOrg\Properties\ValidIn;
use NilPortugues\SchemaOrg\Properties\ValidUntil;

/**
 * Classes Permit
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A permit issued by an organization, e.g. a parking pass.
 */
class Permit
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Permit";

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
    public static function issuedBy()
    {
        return IssuedBy::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function issuedThrough()
    {
        return IssuedThrough::create(self::schemaUrl());
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
    public static function permitAudience()
    {
        return PermitAudience::create(self::schemaUrl());
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
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validFor()
    {
        return ValidFor::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validFrom()
    {
        return ValidFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validIn()
    {
        return ValidIn::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validUntil()
    {
        return ValidUntil::create(self::schemaUrl());
    }
}