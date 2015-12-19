<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\RsvpResponseType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RsvpResponseTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class RsvpResponseTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(RsvpResponseType::schemaUrl(), "http://schema.org/RsvpResponseType");
    }


}