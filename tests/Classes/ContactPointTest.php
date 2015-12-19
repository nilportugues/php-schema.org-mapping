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

    public function testProductSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::productSupported());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::serviceArea());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ContactPoint::telephone());
    }
}