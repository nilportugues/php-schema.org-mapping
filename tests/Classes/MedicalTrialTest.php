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

use NilPortugues\SchemaOrg\Classes\MedicalTrial;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalTrialTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalTrialTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalTrial::schemaUrl(), "http://schema.org/MedicalTrial");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::description());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::name());
    }

    public function testOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::outcome());
    }

    public function testPhaseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::phase());
    }

    public function testPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::population());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::sameAs());
    }

    public function testSponsorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::sponsor());
    }

    public function testStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::status());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::study());
    }

    public function testStudyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::studyLocation());
    }

    public function testStudySubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::studySubject());
    }

    public function testTrialDesignWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::trialDesign());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrial::url());
    }
}