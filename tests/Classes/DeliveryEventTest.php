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

use NilPortugues\SchemaOrg\Classes\DeliveryEvent;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DeliveryEventTest.
 */
class DeliveryEventTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DeliveryEvent::schemaUrl(), 'http://schema.org/DeliveryEvent');
    }

    public function testAccessCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::accessCode());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::alternateName());
    }

    public function testAvailableFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::availableFrom());
    }

    public function testAvailableThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::availableThrough());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::description());
    }

    public function testHasDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::hasDeliveryMethod());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryEvent::url());
    }
}
