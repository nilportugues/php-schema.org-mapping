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

use NilPortugues\SchemaOrg\Classes\DDxElement;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DDxElementTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DDxElementTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DDxElement::schemaUrl(), "http://schema.org/DDxElement");
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::code());
    }

    public function testDiagnosisWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::diagnosis());
    }

    public function testDistinguishingSignWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::distinguishingSign());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DDxElement::study());
    }
}