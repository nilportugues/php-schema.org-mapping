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

use NilPortugues\SchemaOrg\Classes\MedicalGuidelineRecommendation;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalGuidelineRecommendationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalGuidelineRecommendationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalGuidelineRecommendation::schemaUrl(), "http://schema.org/MedicalGuidelineRecommendation");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::description());
    }

    public function testEvidenceLevelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::evidenceLevel());
    }

    public function testEvidenceOriginWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::evidenceOrigin());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::guideline());
    }

    public function testGuidelineDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::guidelineDate());
    }

    public function testGuidelineSubjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::guidelineSubject());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::recognizingAuthority());
    }

    public function testRecommendationStrengthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::recommendationStrength());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::sameAs());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::url());
    }
}