<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\EntryPoint;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EntryPointTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EntryPointTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EntryPoint::schemaUrl(), "http://schema.org/EntryPoint");
    }

    public function testActionApplicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::actionApplication());
    }

    public function testActionPlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::actionPlatform());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::alternateName());
    }

    public function testApplicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::application());
    }

    public function testContentTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::contentType());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::description());
    }

    public function testEncodingTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::encodingType());
    }

    public function testHttpMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::httpMethod());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::url());
    }

    public function testUrlTemplateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EntryPoint::urlTemplate());
    }
}