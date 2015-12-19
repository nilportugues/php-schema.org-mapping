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

use NilPortugues\SchemaOrg\Classes\BroadcastService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BroadcastServiceTest.
 */
class BroadcastServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BroadcastService::schemaUrl(), 'http://schema.org/BroadcastService');
    }

    public function testAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::area());
    }

    public function testBroadcasterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::broadcaster());
    }

    public function testParentServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::parentService());
    }

    public function testVideoFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::videoFormat());
    }
}
