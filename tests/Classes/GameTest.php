<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Game;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GameTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GameTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Game::schemaUrl(), "http://schema.org/Game");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::alternateName());
    }

    public function testCharacterAttributeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::characterAttribute());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::description());
    }

    public function testGameItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::gameItem());
    }

    public function testGameLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::gameLocation());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::name());
    }

    public function testNumberOfPlayersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::numberOfPlayers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::potentialAction());
    }

    public function testQuestWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::quest());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Game::url());
    }
}