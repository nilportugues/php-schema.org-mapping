<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PublicationEvent;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PublicationEventTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PublicationEventTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PublicationEvent::schemaUrl(), "http://schema.org/PublicationEvent");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::description());
    }

    public function testFreeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::free());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::image());
    }

    public function testIsAccessibleForFreeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::isAccessibleForFree());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::potentialAction());
    }

    public function testPublishedOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::publishedOn());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationEvent::url());
    }
}