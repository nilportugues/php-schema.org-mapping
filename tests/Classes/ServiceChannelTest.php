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

use NilPortugues\SchemaOrg\Classes\ServiceChannel;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ServiceChannelTest.
 */
class ServiceChannelTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ServiceChannel::schemaUrl(), 'http://schema.org/ServiceChannel');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::alternateName());
    }

    public function testAvailableLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::availableLanguage());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::potentialAction());
    }

    public function testProcessingTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::processingTime());
    }

    public function testProvidesServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::providesService());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::sameAs());
    }

    public function testServiceLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::serviceLocation());
    }

    public function testServicePhoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::servicePhone());
    }

    public function testServicePostalAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::servicePostalAddress());
    }

    public function testServiceSmsNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::serviceSmsNumber());
    }

    public function testServiceUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::serviceUrl());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ServiceChannel::url());
    }
}
