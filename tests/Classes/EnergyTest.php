<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Energy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EnergyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EnergyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Energy::schemaUrl(), "http://schema.org/Energy");
    }


}