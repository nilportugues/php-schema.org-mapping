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

use NilPortugues\SchemaOrg\Classes\InfectiousDisease;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InfectiousDiseaseTest.
 */
class InfectiousDiseaseTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InfectiousDisease::schemaUrl(), 'http://schema.org/InfectiousDisease');
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::guideline());
    }

    public function testInfectiousAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::infectiousAgent());
    }

    public function testInfectiousAgentClassWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::infectiousAgentClass());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::study());
    }

    public function testTransmissionMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InfectiousDisease::transmissionMethod());
    }
}
