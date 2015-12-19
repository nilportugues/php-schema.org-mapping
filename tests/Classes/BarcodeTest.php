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

use NilPortugues\SchemaOrg\Classes\Barcode;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BarcodeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BarcodeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Barcode::schemaUrl(), "http://schema.org/Barcode");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::alternateName());
    }

    public function testAssociatedArticleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::associatedArticle());
    }

    public function testBitrateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::bitrate());
    }

    public function testContentSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::contentSize());
    }

    public function testContentUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::contentUrl());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::description());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::duration());
    }

    public function testEmbedUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::embedUrl());
    }

    public function testEncodesCreativeWorkWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::encodesCreativeWork());
    }

    public function testEncodingFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::encodingFormat());
    }

    public function testExpiresWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::expires());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::height());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::name());
    }

    public function testPlayerTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::playerType());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::potentialAction());
    }

    public function testProductionCompanyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::productionCompany());
    }

    public function testRegionsAllowedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::regionsAllowed());
    }

    public function testRequiresSubscriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::requiresSubscription());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::sameAs());
    }

    public function testUploadDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::uploadDate());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::url());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Barcode::width());
    }
}