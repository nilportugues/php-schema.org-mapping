<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\CargoVolume;
use NilPortugues\SchemaOrg\Properties\DateVehicleFirstRegistered;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\DriveWheelConfiguration;
use NilPortugues\SchemaOrg\Properties\FuelConsumption;
use NilPortugues\SchemaOrg\Properties\FuelEfficiency;
use NilPortugues\SchemaOrg\Properties\FuelType;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\KnownVehicleDamages;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MileageFromOdometer;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\NumberOfAirbags;
use NilPortugues\SchemaOrg\Properties\NumberOfAxles;
use NilPortugues\SchemaOrg\Properties\NumberOfDoors;
use NilPortugues\SchemaOrg\Properties\NumberOfForwardGears;
use NilPortugues\SchemaOrg\Properties\NumberOfPreviousOwners;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProductionDate;
use NilPortugues\SchemaOrg\Properties\PurchaseDate;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\SteeringPosition;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\VehicleConfiguration;
use NilPortugues\SchemaOrg\Properties\VehicleEngine;
use NilPortugues\SchemaOrg\Properties\VehicleInteriorColor;
use NilPortugues\SchemaOrg\Properties\VehicleInteriorType;
use NilPortugues\SchemaOrg\Properties\VehicleModelDate;
use NilPortugues\SchemaOrg\Properties\VehicleSeatingCapacity;
use NilPortugues\SchemaOrg\Properties\VehicleTransmission;
use NilPortugues\SchemaOrg\Properties\Vin;

/**
 * Classes Vehicle
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
 */
class Vehicle
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Vehicle";

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
    public static function cargoVolume()
    {
        return CargoVolume::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function dateVehicleFirstRegistered()
    {
        return DateVehicleFirstRegistered::create(self::schemaUrl());
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
    public static function driveWheelConfiguration()
    {
        return DriveWheelConfiguration::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function fuelConsumption()
    {
        return FuelConsumption::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function fuelEfficiency()
    {
        return FuelEfficiency::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function fuelType()
    {
        return FuelType::create(self::schemaUrl());
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
    public static function knownVehicleDamages()
    {
        return KnownVehicleDamages::create(self::schemaUrl());
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
    public static function mileageFromOdometer()
    {
        return MileageFromOdometer::create(self::schemaUrl());
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
    public static function numberOfAirbags()
    {
        return NumberOfAirbags::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function numberOfAxles()
    {
        return NumberOfAxles::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function numberOfDoors()
    {
        return NumberOfDoors::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function numberOfForwardGears()
    {
        return NumberOfForwardGears::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function numberOfPreviousOwners()
    {
        return NumberOfPreviousOwners::create(self::schemaUrl());
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
    public static function productionDate()
    {
        return ProductionDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function purchaseDate()
    {
        return PurchaseDate::create(self::schemaUrl());
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
    public static function steeringPosition()
    {
        return SteeringPosition::create(self::schemaUrl());
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
    public static function vehicleConfiguration()
    {
        return VehicleConfiguration::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vehicleEngine()
    {
        return VehicleEngine::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vehicleInteriorColor()
    {
        return VehicleInteriorColor::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vehicleInteriorType()
    {
        return VehicleInteriorType::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vehicleModelDate()
    {
        return VehicleModelDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vehicleSeatingCapacity()
    {
        return VehicleSeatingCapacity::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vehicleTransmission()
    {
        return VehicleTransmission::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function vin()
    {
        return Vin::create(self::schemaUrl());
    }
}