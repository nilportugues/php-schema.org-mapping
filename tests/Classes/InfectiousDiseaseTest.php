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

use NilPortugues\SchemaOrg\Classes\InfectiousDisease;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InfectiousDiseaseTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class InfectiousDiseaseTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InfectiousDisease::schemaUrl(), "http://schema.org/InfectiousDisease");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::alternateName());
    }

    public function testAssociatedAnatomyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::associatedAnatomy());
    }

    public function testCauseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::cause());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::description());
    }

    public function testDifferentialDiagnosisWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::differentialDiagnosis());
    }

    public function testEpidemiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::epidemiology());
    }

    public function testExpectedPrognosisWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::expectedPrognosis());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::image());
    }

    public function testInfectiousAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::infectiousAgent());
    }

    public function testInfectiousAgentClassWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::infectiousAgentClass());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::name());
    }

    public function testNaturalProgressionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::naturalProgression());
    }

    public function testPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::pathophysiology());
    }

    public function testPossibleComplicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::possibleComplication());
    }

    public function testPossibleTreatmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::possibleTreatment());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::potentialAction());
    }

    public function testPrimaryPreventionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::primaryPrevention());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::relevantSpecialty());
    }

    public function testRiskFactorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::riskFactor());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::sameAs());
    }

    public function testSecondaryPreventionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::secondaryPrevention());
    }

    public function testSignOrSymptomWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::signOrSymptom());
    }

    public function testStageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::stage());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::study());
    }

    public function testSubtypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::subtype());
    }

    public function testTransmissionMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::transmissionMethod());
    }

    public function testTypicalTestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::typicalTest());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::url());
    }
}