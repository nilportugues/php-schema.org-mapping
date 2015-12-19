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

use NilPortugues\SchemaOrg\Classes\Joint;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes JointTest.
 */
class JointTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Joint::schemaUrl(), 'http://schema.org/Joint');
    }

    public function testBiomechnicalClassWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::biomechnicalClass());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::code());
    }

    public function testFunctionalClassWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::functionalClass());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::relevantSpecialty());
    }

    public function testStructuralClassWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::structuralClass());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Joint::study());
    }
}
