<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GameServer;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GameServerTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GameServerTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GameServer::schemaUrl(), "http://schema.org/GameServer");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::description());
    }

    public function testGameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::game());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::name());
    }

    public function testPlayersOnlineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::playersOnline());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::sameAs());
    }

    public function testServerStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::serverStatus());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GameServer::url());
    }
}