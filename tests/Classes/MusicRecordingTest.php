<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MusicRecording;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MusicRecordingTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MusicRecordingTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MusicRecording::schemaUrl(), "http://schema.org/MusicRecording");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::alternateName());
    }

    public function testByArtistWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::byArtist());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::description());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::duration());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::image());
    }

    public function testInAlbumWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::inAlbum());
    }

    public function testInPlaylistWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::inPlaylist());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicRecording::url());
    }
}