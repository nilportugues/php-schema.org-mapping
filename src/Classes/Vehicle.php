<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\CargoVolumeProperty;
use NilPortugues\SchemaOrg\Properties\DateVehicleFirstRegisteredProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DriveWheelConfigurationProperty;
use NilPortugues\SchemaOrg\Properties\FuelConsumptionProperty;
use NilPortugues\SchemaOrg\Properties\FuelEfficiencyProperty;
use NilPortugues\SchemaOrg\Properties\FuelTypeProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\KnownVehicleDamagesProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MileageFromOdometerProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfAirbagsProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfAxlesProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfDoorsProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfForwardGearsProperty;
use NilPortugues\SchemaOrg\Properties\NumberOfPreviousOwnersProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProductionDateProperty;
use NilPortugues\SchemaOrg\Properties\PurchaseDateProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SteeringPositionProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\VehicleConfigurationProperty;
use NilPortugues\SchemaOrg\Properties\VehicleEngineProperty;
use NilPortugues\SchemaOrg\Properties\VehicleInteriorColorProperty;
use NilPortugues\SchemaOrg\Properties\VehicleInteriorTypeProperty;
use NilPortugues\SchemaOrg\Properties\VehicleModelDateProperty;
use NilPortugues\SchemaOrg\Properties\VehicleSeatingCapacityProperty;
use NilPortugues\SchemaOrg\Properties\VehicleTransmissionProperty;
use NilPortugues\SchemaOrg\Properties\VinProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes Vehicle.
 */
class Vehicle extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Vehicle';

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
    public static function cargoVolume()
    {
        return CargoVolumeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function dateVehicleFirstRegistered()
    {
        return DateVehicleFirstRegisteredProperty::create(self::schemaUrl());
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
    public static function driveWheelConfiguration()
    {
        return DriveWheelConfigurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fuelConsumption()
    {
        return FuelConsumptionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fuelEfficiency()
    {
        return FuelEfficiencyProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fuelType()
    {
        return FuelTypeProperty::create(self::schemaUrl());
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
    public static function knownVehicleDamages()
    {
        return KnownVehicleDamagesProperty::create(self::schemaUrl());
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
    public static function mileageFromOdometer()
    {
        return MileageFromOdometerProperty::create(self::schemaUrl());
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
    public static function numberOfAirbags()
    {
        return NumberOfAirbagsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfAxles()
    {
        return NumberOfAxlesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfDoors()
    {
        return NumberOfDoorsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfForwardGears()
    {
        return NumberOfForwardGearsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function numberOfPreviousOwners()
    {
        return NumberOfPreviousOwnersProperty::create(self::schemaUrl());
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
    public static function productionDate()
    {
        return ProductionDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function purchaseDate()
    {
        return PurchaseDateProperty::create(self::schemaUrl());
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
    public static function steeringPosition()
    {
        return SteeringPositionProperty::create(self::schemaUrl());
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
    public static function vehicleConfiguration()
    {
        return VehicleConfigurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vehicleEngine()
    {
        return VehicleEngineProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vehicleInteriorColor()
    {
        return VehicleInteriorColorProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vehicleInteriorType()
    {
        return VehicleInteriorTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vehicleModelDate()
    {
        return VehicleModelDateProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vehicleSeatingCapacity()
    {
        return VehicleSeatingCapacityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vehicleTransmission()
    {
        return VehicleTransmissionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function vin()
    {
        return VinProperty::create(self::schemaUrl());
    }
}
