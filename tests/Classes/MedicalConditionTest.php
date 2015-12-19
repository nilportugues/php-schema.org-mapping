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

use NilPortugues\SchemaOrg\Classes\MedicalCondition;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalConditionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalConditionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalCondition::schemaUrl(), "http://schema.org/MedicalCondition");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::alternateName());
    }

    public function testAssociatedAnatomyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::associatedAnatomy());
    }

    public function testCauseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::cause());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::description());
    }

    public function testDifferentialDiagnosisWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::differentialDiagnosis());
    }

    public function testEpidemiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::epidemiology());
    }

    public function testExpectedPrognosisWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::expectedPrognosis());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::name());
    }

    public function testNaturalProgressionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::naturalProgression());
    }

    public function testPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::pathophysiology());
    }

    public function testPossibleComplicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::possibleComplication());
    }

    public function testPossibleTreatmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::possibleTreatment());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::potentialAction());
    }

    public function testPrimaryPreventionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::primaryPrevention());
    }

    public function testRiskFactorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::riskFactor());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::sameAs());
    }

    public function testSecondaryPreventionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::secondaryPrevention());
    }

    public function testSignOrSymptomWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::signOrSymptom());
    }

    public function testStageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::stage());
    }

    public function testSubtypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::subtype());
    }

    public function testTypicalTestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::typicalTest());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalCondition::url());
    }
}