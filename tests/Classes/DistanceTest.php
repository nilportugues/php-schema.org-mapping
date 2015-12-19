<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Distance;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DistanceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DistanceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Distance::schemaUrl(), "http://schema.org/Distance");
    }


}