<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\UpdateAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes UpdateActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class UpdateActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(UpdateAction::schemaUrl(), "http://schema.org/UpdateAction");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::alternateName());
    }

    public function testCollectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::collection());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::sameAs());
    }

    public function testTargetCollectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::targetCollection());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UpdateAction::url());
    }
}