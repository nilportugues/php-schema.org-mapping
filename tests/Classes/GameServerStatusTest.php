<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GameServerStatus;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GameServerStatusTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GameServerStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GameServerStatus::schemaUrl(), "http://schema.org/GameServerStatus");
    }


}