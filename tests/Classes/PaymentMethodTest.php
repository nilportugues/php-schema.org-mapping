<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PaymentMethod;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentMethodTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PaymentMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PaymentMethod::schemaUrl(), "http://schema.org/PaymentMethod");
    }


}