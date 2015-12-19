<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\SportsTeam;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SportsTeamTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SportsTeamTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(SportsTeam::schemaUrl(), "http://schema.org/SportsTeam");
    }


}