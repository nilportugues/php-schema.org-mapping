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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfDoorsProperty numberOfDoors()
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfAirbagsProperty numberOfAirbags()
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfAxlesProperty numberOfAxles()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleEngineProperty vehicleEngine()
 * @method static \NilPortugues\SchemaOrg\Properties\FuelConsumptionProperty fuelConsumption()
 * @method static \NilPortugues\SchemaOrg\Properties\FuelEfficiencyProperty fuelEfficiency()
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfForwardGearsProperty numberOfForwardGears()
 * @method static \NilPortugues\SchemaOrg\Properties\VinProperty vin()
 * @method static \NilPortugues\SchemaOrg\Properties\CargoVolumeProperty cargoVolume()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleConfigurationProperty vehicleConfiguration()
 * @method static \NilPortugues\SchemaOrg\Properties\KnownVehicleDamagesProperty knownVehicleDamages()
 * @method static \NilPortugues\SchemaOrg\Properties\DateVehicleFirstRegisteredProperty dateVehicleFirstRegistered()
 * @method static \NilPortugues\SchemaOrg\Properties\DriveWheelConfigurationProperty driveWheelConfiguration()
 * @method static \NilPortugues\SchemaOrg\Properties\FuelTypeProperty fuelType()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleInteriorColorProperty vehicleInteriorColor()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleInteriorTypeProperty vehicleInteriorType()
 * @method static \NilPortugues\SchemaOrg\Properties\MileageFromOdometerProperty mileageFromOdometer()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleModelDateProperty vehicleModelDate()
 * @method static \NilPortugues\SchemaOrg\Properties\NumberOfPreviousOwnersProperty numberOfPreviousOwners()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductionDateProperty productionDate()
 * @method static \NilPortugues\SchemaOrg\Properties\PurchaseDateProperty purchaseDate()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleSeatingCapacityProperty vehicleSeatingCapacity()
 * @method static \NilPortugues\SchemaOrg\Properties\VehicleTransmissionProperty vehicleTransmission()
 * @method static \NilPortugues\SchemaOrg\Properties\SteeringPositionProperty steeringPosition()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
 */
class Vehicle extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Vehicle';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'cargoVolume' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CargoVolumeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'dateVehicleFirstRegistered' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateVehicleFirstRegisteredProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'driveWheelConfiguration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DriveWheelConfigurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'fuelConsumption' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FuelConsumptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'fuelEfficiency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FuelEfficiencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'fuelType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FuelTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'knownVehicleDamages' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\KnownVehicleDamagesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mileageFromOdometer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MileageFromOdometerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'numberOfAirbags' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfAirbagsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'numberOfAxles' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfAxlesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'numberOfDoors' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfDoorsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'numberOfForwardGears' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfForwardGearsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'numberOfPreviousOwners' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NumberOfPreviousOwnersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productionDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'purchaseDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PurchaseDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'steeringPosition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SteeringPositionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'vehicleConfiguration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleConfigurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vehicleEngine' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleEngineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vehicleInteriorColor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleInteriorColorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vehicleInteriorType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleInteriorTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vehicleModelDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleModelDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vehicleSeatingCapacity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleSeatingCapacityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vehicleTransmission' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VehicleTransmissionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'vin' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\VinProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
    ];
}
