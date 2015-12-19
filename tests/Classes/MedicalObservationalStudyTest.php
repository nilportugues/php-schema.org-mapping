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

use NilPortugues\SchemaOrg\Classes\MedicalObservationalStudy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalObservationalStudyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalObservationalStudyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalObservationalStudy::schemaUrl(), "http://schema.org/MedicalObservationalStudy");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::description());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::name());
    }

    public function testOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::outcome());
    }

    public function testPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::population());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::sameAs());
    }

    public function testSponsorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::sponsor());
    }

    public function testStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::status());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::study());
    }

    public function testStudyDesignWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::studyDesign());
    }

    public function testStudyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::studyLocation());
    }

    public function testStudySubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::studySubject());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::url());
    }
}