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

use NilPortugues\SchemaOrg\Classes\MedicalTherapy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalTherapyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalTherapyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalTherapy::schemaUrl(), "http://schema.org/MedicalTherapy");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::additionalType());
    }

    public function testAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::adverseOutcome());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::alternateName());
    }

    public function testContraindicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::contraindication());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::description());
    }

    public function testDuplicateTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::duplicateTherapy());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::image());
    }

    public function testIndicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::indication());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::sameAs());
    }

    public function testSeriousAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::seriousAdverseOutcome());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTherapy::url());
    }
}