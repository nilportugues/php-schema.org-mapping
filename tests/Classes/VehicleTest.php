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

use NilPortugues\SchemaOrg\Classes\Vehicle;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes VehicleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class VehicleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Vehicle::schemaUrl(), "http://schema.org/Vehicle");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::additionalProperty());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::alternateName());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::audience());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::awards());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::brand());
    }

    public function testCargoVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::cargoVolume());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::category());
    }

    public function testColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::color());
    }

    public function testDateVehicleFirstRegisteredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::dateVehicleFirstRegistered());
    }

    public function testDepthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::depth());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::description());
    }

    public function testDriveWheelConfigurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::driveWheelConfiguration());
    }

    public function testFuelConsumptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::fuelConsumption());
    }

    public function testFuelEfficiencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::fuelEfficiency());
    }

    public function testFuelTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::fuelType());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::gtin8());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::height());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::image());
    }

    public function testIsAccessoryOrSparePartForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::isAccessoryOrSparePartFor());
    }

    public function testIsConsumableForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::isConsumableFor());
    }

    public function testIsRelatedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::isRelatedTo());
    }

    public function testIsSimilarToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::isSimilarTo());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::itemCondition());
    }

    public function testKnownVehicleDamagesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::knownVehicleDamages());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::logo());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::mainEntityOfPage());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::manufacturer());
    }

    public function testMileageFromOdometerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::mileageFromOdometer());
    }

    public function testModelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::model());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::mpn());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::name());
    }

    public function testNumberOfAirbagsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::numberOfAirbags());
    }

    public function testNumberOfAxlesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::numberOfAxles());
    }

    public function testNumberOfDoorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::numberOfDoors());
    }

    public function testNumberOfForwardGearsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::numberOfForwardGears());
    }

    public function testNumberOfPreviousOwnersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::numberOfPreviousOwners());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::potentialAction());
    }

    public function testProductIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::productID());
    }

    public function testProductionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::productionDate());
    }

    public function testPurchaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::purchaseDate());
    }

    public function testReleaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::releaseDate());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::sameAs());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::sku());
    }

    public function testSteeringPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::steeringPosition());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::url());
    }

    public function testVehicleConfigurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleConfiguration());
    }

    public function testVehicleEngineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleEngine());
    }

    public function testVehicleInteriorColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleInteriorColor());
    }

    public function testVehicleInteriorTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleInteriorType());
    }

    public function testVehicleModelDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleModelDate());
    }

    public function testVehicleSeatingCapacityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleSeatingCapacity());
    }

    public function testVehicleTransmissionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vehicleTransmission());
    }

    public function testVinWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::vin());
    }

    public function testWeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::weight());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::width());
    }
}