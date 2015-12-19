<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Car;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CarTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class CarTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Car::schemaUrl(), "http://schema.org/Car");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::additionalProperty());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::alternateName());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::audience());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::awards());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::brand());
    }

    public function testCargoVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::cargoVolume());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::category());
    }

    public function testColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::color());
    }

    public function testDateVehicleFirstRegisteredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::dateVehicleFirstRegistered());
    }

    public function testDepthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::depth());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::description());
    }

    public function testDriveWheelConfigurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::driveWheelConfiguration());
    }

    public function testFuelConsumptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::fuelConsumption());
    }

    public function testFuelEfficiencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::fuelEfficiency());
    }

    public function testFuelTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::fuelType());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin8());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::height());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::image());
    }

    public function testIsAccessoryOrSparePartForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isAccessoryOrSparePartFor());
    }

    public function testIsConsumableForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isConsumableFor());
    }

    public function testIsRelatedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isRelatedTo());
    }

    public function testIsSimilarToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isSimilarTo());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::itemCondition());
    }

    public function testKnownVehicleDamagesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::knownVehicleDamages());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::logo());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::mainEntityOfPage());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::manufacturer());
    }

    public function testMileageFromOdometerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::mileageFromOdometer());
    }

    public function testModelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::model());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::mpn());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::name());
    }

    public function testNumberOfAirbagsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::numberOfAirbags());
    }

    public function testNumberOfAxlesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::numberOfAxles());
    }

    public function testNumberOfDoorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::numberOfDoors());
    }

    public function testNumberOfForwardGearsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::numberOfForwardGears());
    }

    public function testNumberOfPreviousOwnersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::numberOfPreviousOwners());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::potentialAction());
    }

    public function testProductIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::productID());
    }

    public function testProductionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::productionDate());
    }

    public function testPurchaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::purchaseDate());
    }

    public function testReleaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::releaseDate());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::sameAs());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::sku());
    }

    public function testSteeringPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::steeringPosition());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::url());
    }

    public function testVehicleConfigurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleConfiguration());
    }

    public function testVehicleEngineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleEngine());
    }

    public function testVehicleInteriorColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleInteriorColor());
    }

    public function testVehicleInteriorTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleInteriorType());
    }

    public function testVehicleModelDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleModelDate());
    }

    public function testVehicleSeatingCapacityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleSeatingCapacity());
    }

    public function testVehicleTransmissionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vehicleTransmission());
    }

    public function testVinWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::vin());
    }

    public function testWeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::weight());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::width());
    }
}