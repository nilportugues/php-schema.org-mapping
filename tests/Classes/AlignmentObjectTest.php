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

use NilPortugues\SchemaOrg\Classes\AlignmentObject;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes AlignmentObjectTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class AlignmentObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(AlignmentObject::schemaUrl(), "http://schema.org/AlignmentObject");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::additionalType());
    }

    public function testAlignmentTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::alignmentType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::description());
    }

    public function testEducationalFrameworkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::educationalFramework());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::sameAs());
    }

    public function testTargetDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::targetDescription());
    }

    public function testTargetNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::targetName());
    }

    public function testTargetUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::targetUrl());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AlignmentObject::url());
    }
}