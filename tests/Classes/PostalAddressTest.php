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

use NilPortugues\SchemaOrg\Classes\PostalAddress;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PostalAddressTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PostalAddressTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PostalAddress::schemaUrl(), "http://schema.org/PostalAddress");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::additionalType());
    }

    public function testAddressCountryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::addressCountry());
    }

    public function testAddressLocalityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::addressLocality());
    }

    public function testAddressRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::addressRegion());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::name());
    }

    public function testPostOfficeBoxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::postOfficeBoxNumber());
    }

    public function testPostalCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::postalCode());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::sameAs());
    }

    public function testStreetAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::streetAddress());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PostalAddress::url());
    }
}