<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DeliveryMethod;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DeliveryMethodTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DeliveryMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DeliveryMethod::schemaUrl(), "http://schema.org/DeliveryMethod");
    }


}