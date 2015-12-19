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

use NilPortugues\SchemaOrg\Classes\MusicPlaylist;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MusicPlaylistTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MusicPlaylistTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MusicPlaylist::schemaUrl(), "http://schema.org/MusicPlaylist");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::name());
    }

    public function testNumTracksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::numTracks());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::sameAs());
    }

    public function testTracksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::tracks());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MusicPlaylist::url());
    }
}