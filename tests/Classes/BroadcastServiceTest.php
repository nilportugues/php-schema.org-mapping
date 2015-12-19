<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BroadcastService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BroadcastServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BroadcastServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BroadcastService::schemaUrl(), "http://schema.org/BroadcastService");
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