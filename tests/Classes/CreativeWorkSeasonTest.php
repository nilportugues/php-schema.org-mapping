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

use NilPortugues\SchemaOrg\Classes\CreativeWorkSeason;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CreativeWorkSeasonTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class CreativeWorkSeasonTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(CreativeWorkSeason::schemaUrl(), "http://schema.org/CreativeWorkSeason");
    }

    public function testActorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::actor());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::description());
    }

    public function testDirectorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::director());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::endDate());
    }

    public function testEpisodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::episode());
    }

    public function testEpisodesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::episodes());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::name());
    }

    public function testNumberOfEpisodesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::numberOfEpisodes());
    }

    public function testPartOfSeriesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::partOfSeries());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::potentialAction());
    }

    public function testProductionCompanyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::productionCompany());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::sameAs());
    }

    public function testSeasonNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::seasonNumber());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::startDate());
    }

    public function testTrailerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::trailer());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CreativeWorkSeason::url());
    }
}