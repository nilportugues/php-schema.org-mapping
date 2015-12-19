<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ItemListOrderType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ItemListOrderTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ItemListOrderTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ItemListOrderType::schemaUrl(), "http://schema.org/ItemListOrderType");
    }


}