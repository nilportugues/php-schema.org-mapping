<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ItemAvailability;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ItemAvailabilityTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ItemAvailabilityTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ItemAvailability::schemaUrl(), "http://schema.org/ItemAvailability");
    }


}