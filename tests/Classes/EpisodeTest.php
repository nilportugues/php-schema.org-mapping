<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Episode;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EpisodeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EpisodeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Episode::schemaUrl(), "http://schema.org/Episode");
    }

    public function testActorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::actor());
    }

    public function testActorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::actors());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::description());
    }

    public function testDirectorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::director());
    }

    public function testDirectorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::directors());
    }

    public function testEpisodeNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::episodeNumber());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::mainEntityOfPage());
    }

    public function testMusicByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::musicBy());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::name());
    }

    public function testPartOfSeasonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::partOfSeason());
    }

    public function testPartOfSeriesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::partOfSeries());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::potentialAction());
    }

    public function testProductionCompanyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::productionCompany());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::sameAs());
    }

    public function testTrailerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::trailer());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Episode::url());
    }
}