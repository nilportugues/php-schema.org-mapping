<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\NutritionInformation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes NutritionInformationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class NutritionInformationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(NutritionInformation::schemaUrl(), "http://schema.org/NutritionInformation");
    }

    public function testCaloriesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::calories());
    }

    public function testCarbohydrateContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::carbohydrateContent());
    }

    public function testCholesterolContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::cholesterolContent());
    }

    public function testFatContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::fatContent());
    }

    public function testFiberContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::fiberContent());
    }

    public function testProteinContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::proteinContent());
    }

    public function testSaturatedFatContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::saturatedFatContent());
    }

    public function testServingSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::servingSize());
    }

    public function testSodiumContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::sodiumContent());
    }

    public function testSugarContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::sugarContent());
    }

    public function testTransFatContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::transFatContent());
    }

    public function testUnsaturatedFatContentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NutritionInformation::unsaturatedFatContent());
    }
}