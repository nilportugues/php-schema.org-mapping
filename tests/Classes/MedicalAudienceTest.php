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

use NilPortugues\SchemaOrg\Classes\MedicalAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalAudienceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalAudience::schemaUrl(), "http://schema.org/MedicalAudience");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::alternateName());
    }

    public function testAudienceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::audienceType());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::description());
    }

    public function testGeographicAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::geographicArea());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::guideline());
    }

    public function testHealthConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::healthCondition());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::relevantSpecialty());
    }

    public function testRequiredGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::requiredGender());
    }

    public function testRequiredMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::requiredMaxAge());
    }

    public function testRequiredMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::requiredMinAge());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::sameAs());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::study());
    }

    public function testSuggestedGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::suggestedGender());
    }

    public function testSuggestedMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::suggestedMaxAge());
    }

    public function testSuggestedMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::suggestedMinAge());
    }

    public function testSupersededByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::supersededBy());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::url());
    }
}