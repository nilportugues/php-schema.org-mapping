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

use NilPortugues\SchemaOrg\Classes\DietarySupplement;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DietarySupplementTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DietarySupplementTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DietarySupplement::schemaUrl(), "http://schema.org/DietarySupplement");
    }

    public function testActiveIngredientWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::activeIngredient());
    }

    public function testBackgroundWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::background());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::code());
    }

    public function testDosageFormWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::dosageForm());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::guideline());
    }

    public function testIsProprietaryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::isProprietary());
    }

    public function testLegalStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::legalStatus());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::manufacturer());
    }

    public function testMaximumIntakeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::maximumIntake());
    }

    public function testMechanismOfActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::mechanismOfAction());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::medicineSystem());
    }

    public function testNonProprietaryNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::nonProprietaryName());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::recognizingAuthority());
    }

    public function testRecommendedIntakeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::recommendedIntake());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::relevantSpecialty());
    }

    public function testSafetyConsiderationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::safetyConsideration());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::study());
    }

    public function testTargetPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DietarySupplement::targetPopulation());
    }
}