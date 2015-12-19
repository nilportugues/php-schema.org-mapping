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

use NilPortugues\SchemaOrg\Classes\VisualArtwork;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes VisualArtworkTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class VisualArtworkTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(VisualArtwork::schemaUrl(), "http://schema.org/VisualArtwork");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::alternateName());
    }

    public function testArtEditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::artEdition());
    }

    public function testArtMediumWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::artMedium());
    }

    public function testArtformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::artform());
    }

    public function testArtworkSurfaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::artworkSurface());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::mainEntityOfPage());
    }

    public function testMaterialWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::material());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::sameAs());
    }

    public function testSurfaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::surface());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, VisualArtwork::url());
    }
}