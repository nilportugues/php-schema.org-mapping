<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ArrivalPlatform;
use NilPortugues\SchemaOrg\Properties\ArrivalStation;
use NilPortugues\SchemaOrg\Properties\ArrivalTime;
use NilPortugues\SchemaOrg\Properties\DeparturePlatform;
use NilPortugues\SchemaOrg\Properties\DepartureStation;
use NilPortugues\SchemaOrg\Properties\DepartureTime;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\TrainName;
use NilPortugues\SchemaOrg\Properties\TrainNumber;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes TrainTrip
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A trip on a commercial train line.
 */
class TrainTrip
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/TrainTrip";

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
    public static function arrivalPlatform()
    {
        return ArrivalPlatform::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function arrivalStation()
    {
        return ArrivalStation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function arrivalTime()
    {
        return ArrivalTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departurePlatform()
    {
        return DeparturePlatform::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departureStation()
    {
        return DepartureStation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function departureTime()
    {
        return DepartureTime::create(self::schemaUrl());
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
    public static function provider()
    {
        return Provider::create(self::schemaUrl());
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
    public static function trainName()
    {
        return TrainName::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function trainNumber()
    {
        return TrainNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}