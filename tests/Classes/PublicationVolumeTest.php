<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PublicationVolume;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PublicationVolumeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PublicationVolumeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PublicationVolume::schemaUrl(), "http://schema.org/PublicationVolume");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::name());
    }

    public function testPageEndWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::pageEnd());
    }

    public function testPageStartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::pageStart());
    }

    public function testPaginationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::pagination());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::url());
    }

    public function testVolumeNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PublicationVolume::volumeNumber());
    }
}