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

use NilPortugues\SchemaOrg\Classes\LifestyleModification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes LifestyleModificationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class LifestyleModificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LifestyleModification::schemaUrl(), "http://schema.org/LifestyleModification");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::additionalType());
    }

    public function testAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::adverseOutcome());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::code());
    }

    public function testContraindicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::contraindication());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::description());
    }

    public function testDuplicateTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::duplicateTherapy());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::guideline());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::image());
    }

    public function testIndicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::indication());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::potentialAction());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::sameAs());
    }

    public function testSeriousAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::seriousAdverseOutcome());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LifestyleModification::url());
    }
}