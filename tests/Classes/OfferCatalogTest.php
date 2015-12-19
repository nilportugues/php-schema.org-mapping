<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OfferCatalog;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OfferCatalogTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OfferCatalogTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OfferCatalog::schemaUrl(), "http://schema.org/OfferCatalog");
    }


}