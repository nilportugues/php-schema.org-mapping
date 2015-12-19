<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OfferItemCondition;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OfferItemConditionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OfferItemConditionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OfferItemCondition::schemaUrl(), "http://schema.org/OfferItemCondition");
    }


}