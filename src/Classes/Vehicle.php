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
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\AudienceProperty audience()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardProperty award()
 * @method static \NilPortugues\SchemaOrg\Properties\AwardsProperty awards()
 * @method static \NilPortugues\SchemaOrg\Properties\BrandProperty brand()
 * @method static \NilPortugues\SchemaOrg\Properties\CategoryProperty category()
 * @method static \NilPortugues\SchemaOrg\Properties\ColorProperty color()
 * @method static \NilPortugues\SchemaOrg\Properties\DepthProperty depth()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin12Property gtin12()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin13Property gtin13()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin14Property gtin14()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin8Property gtin8()
 * @method static \NilPortugues\SchemaOrg\Properties\HeightProperty height()
 * @method static \NilPortugues\SchemaOrg\Properties\IsAccessoryOrSparePartForProperty isAccessoryOrSparePartFor()
 * @method static \NilPortugues\SchemaOrg\Properties\IsConsumableForProperty isConsumableFor()
 * @method static \NilPortugues\SchemaOrg\Properties\IsRelatedToProperty isRelatedTo()
 * @method static \NilPortugues\SchemaOrg\Properties\IsSimilarToProperty isSimilarTo()
 * @method static \NilPortugues\SchemaOrg\Properties\ItemConditionProperty itemCondition()
 * @method static \NilPortugues\SchemaOrg\Properties\LogoProperty logo()
 * @method static \NilPortugues\SchemaOrg\Properties\ManufacturerProperty manufacturer()
 * @method static \NilPortugues\SchemaOrg\Properties\ModelProperty model()
 * @method static \NilPortugues\SchemaOrg\Properties\MpnProperty mpn()
 * @method static \NilPortugues\SchemaOrg\Properties\OffersProperty offers()
 * @method static \NilPortugues\SchemaOrg\Properties\ProductIDProperty productID()
 * @method static \NilPortugues\SchemaOrg\Properties\ReleaseDateProperty releaseDate()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewsProperty reviews()
 * @method static \NilPortugues\SchemaOrg\Properties\SkuProperty sku()
 * @method static \NilPortugues\SchemaOrg\Properties\WeightProperty weight()
 * @method static \NilPortugues\SchemaOrg\Properties\WidthProperty width()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty additionalProperty()
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
        'additionalProperty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalPropertyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'audience' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AudienceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'award' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'awards' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AwardsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'brand' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BrandProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'cargoVolume' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CargoVolumeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'category' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'color' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ColorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'dateVehicleFirstRegistered' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DateVehicleFirstRegisteredProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'depth' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DepthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
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
        'gtin12' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin12Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'gtin13' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin13Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'gtin14' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin14Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'gtin8' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin8Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'height' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HeightProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'isAccessoryOrSparePartFor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsAccessoryOrSparePartForProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'isConsumableFor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsConsumableForProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'isRelatedTo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsRelatedToProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'isSimilarTo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IsSimilarToProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'itemCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'knownVehicleDamages' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\KnownVehicleDamagesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'logo' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LogoProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'manufacturer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ManufacturerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'mileageFromOdometer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MileageFromOdometerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Vehicle',
        ],
        'model' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ModelProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'mpn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MpnProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
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
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'productID' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductIDProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'productionDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProductionDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'purchaseDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PurchaseDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'releaseDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReleaseDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'reviews' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sku' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SkuProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
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
        'weight' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WeightProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
        'width' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WidthProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Product',
        ],
    ];
}
