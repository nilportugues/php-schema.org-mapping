<?php
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

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::alternateName());
    }

    public function testCargoVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::cargoVolume());
    }

    public function testDateVehicleFirstRegisteredWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::dateVehicleFirstRegistered());
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

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::image());
    }

    public function testKnownVehicleDamagesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::knownVehicleDamages());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::mainEntityOfPage());
    }

    public function testMileageFromOdometerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::mileageFromOdometer());
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

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::potentialAction());
    }

    public function testProductionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::productionDate());
    }

    public function testPurchaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::purchaseDate());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vehicle::sameAs());
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
}