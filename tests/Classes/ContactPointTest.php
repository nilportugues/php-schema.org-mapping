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

use NilPortugues\SchemaOrg\Classes\ContactPoint;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ContactPointTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ContactPointTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ContactPoint::schemaUrl(), "http://schema.org/ContactPoint");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::areaServed());
    }

    public function testAvailableLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::availableLanguage());
    }

    public function testContactOptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::contactOption());
    }

    public function testContactTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::contactType());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::description());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::email());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::faxNumber());
    }

    public function testHoursAvailableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::hoursAvailable());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::potentialAction());
    }

    public function testProductSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::productSupported());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::sameAs());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::serviceArea());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::telephone());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::url());
    }
}