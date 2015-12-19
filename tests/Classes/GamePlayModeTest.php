<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GamePlayMode;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GamePlayModeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GamePlayModeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GamePlayMode::schemaUrl(), "http://schema.org/GamePlayMode");
    }


}