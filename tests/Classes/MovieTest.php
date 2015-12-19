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

use NilPortugues\SchemaOrg\Classes\Movie;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MovieTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MovieTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Movie::schemaUrl(), "http://schema.org/Movie");
    }

    public function testActorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::actor());
    }

    public function testActorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::actors());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::alternateName());
    }

    public function testCountryOfOriginWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::countryOfOrigin());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::description());
    }

    public function testDirectorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::director());
    }

    public function testDirectorsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::directors());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::duration());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::mainEntityOfPage());
    }

    public function testMusicByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::musicBy());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::potentialAction());
    }

    public function testProductionCompanyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::productionCompany());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::sameAs());
    }

    public function testSubtitleLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::subtitleLanguage());
    }

    public function testTrailerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::trailer());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Movie::url());
    }
}