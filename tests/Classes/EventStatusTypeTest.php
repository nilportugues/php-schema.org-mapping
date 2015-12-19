<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\EventStatusType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EventStatusTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EventStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EventStatusType::schemaUrl(), "http://schema.org/EventStatusType");
    }


}