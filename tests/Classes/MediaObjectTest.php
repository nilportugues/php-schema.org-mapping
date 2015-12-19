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

use NilPortugues\SchemaOrg\Classes\MediaObject;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MediaObjectTest.
 */
class MediaObjectTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MediaObject::schemaUrl(), 'http://schema.org/MediaObject');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::alternateName());
    }

    public function testAssociatedArticleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::associatedArticle());
    }

    public function testBitrateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::bitrate());
    }

    public function testContentSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::contentSize());
    }

    public function testContentUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::contentUrl());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::description());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::duration());
    }

    public function testEmbedUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::embedUrl());
    }

    public function testEncodesCreativeWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::encodesCreativeWork());
    }

    public function testEncodingFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::encodingFormat());
    }

    public function testExpiresWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::expires());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::height());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::name());
    }

    public function testPlayerTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::playerType());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::potentialAction());
    }

    public function testProductionCompanyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::productionCompany());
    }

    public function testRegionsAllowedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::regionsAllowed());
    }

    public function testRequiresSubscriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::requiresSubscription());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::sameAs());
    }

    public function testUploadDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::uploadDate());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::url());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MediaObject::width());
    }
}
