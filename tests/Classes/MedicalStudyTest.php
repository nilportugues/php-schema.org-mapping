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

use NilPortugues\SchemaOrg\Classes\MedicalStudy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalStudyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalStudyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalStudy::schemaUrl(), "http://schema.org/MedicalStudy");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::description());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::name());
    }

    public function testOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::outcome());
    }

    public function testPopulationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::population());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::sameAs());
    }

    public function testSponsorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::sponsor());
    }

    public function testStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::status());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::study());
    }

    public function testStudyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::studyLocation());
    }

    public function testStudySubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::studySubject());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalStudy::url());
    }
}