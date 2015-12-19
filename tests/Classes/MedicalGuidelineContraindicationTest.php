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

use NilPortugues\SchemaOrg\Classes\MedicalGuidelineContraindication;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalGuidelineContraindicationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalGuidelineContraindicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalGuidelineContraindication::schemaUrl(), "http://schema.org/MedicalGuidelineContraindication");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::description());
    }

    public function testEvidenceLevelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::evidenceLevel());
    }

    public function testEvidenceOriginWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::evidenceOrigin());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::guideline());
    }

    public function testGuidelineDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::guidelineDate());
    }

    public function testGuidelineSubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::guidelineSubject());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::sameAs());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineContraindication::url());
    }
}