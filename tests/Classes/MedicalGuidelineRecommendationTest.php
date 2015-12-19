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

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::medicineSystem());
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

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalGuidelineRecommendation::study());
    }
}