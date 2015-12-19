<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MoveAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MoveActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MoveActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MoveAction::schemaUrl(), "http://schema.org/MoveAction");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::description());
    }

    public function testFromLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::fromLocation());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::sameAs());
    }

    public function testToLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::toLocation());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MoveAction::url());
    }
}