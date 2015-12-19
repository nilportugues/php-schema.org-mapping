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

use NilPortugues\SchemaOrg\Classes\Clip;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ClipTest.
 */
class ClipTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Clip::schemaUrl(), 'http://schema.org/Clip');
    }

    public function testActorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::actor());
    }

    public function testActorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::actors());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::alternateName());
    }

    public function testClipNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::clipNumber());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::description());
    }

    public function testDirectorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::director());
    }

    public function testDirectorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::directors());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::mainEntityOfPage());
    }

    public function testMusicByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::musicBy());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::name());
    }

    public function testPartOfEpisodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::partOfEpisode());
    }

    public function testPartOfSeasonWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::partOfSeason());
    }

    public function testPartOfSeriesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::partOfSeries());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Clip::url());
    }
}
