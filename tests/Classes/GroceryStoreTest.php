<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GroceryStore;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GroceryStoreTest.
 */
class GroceryStoreTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GroceryStore::schemaUrl(), 'http://schema.org/GroceryStore');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::alternateName());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::branchCode());
    }

    public function testBranchOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::branchOf());
    }

    public function testCurrenciesAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::currenciesAccepted());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::name());
    }

    public function testOpeningHoursWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::openingHours());
    }

    public function testPaymentAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::paymentAccepted());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::potentialAction());
    }

    public function testPriceRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::priceRange());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GroceryStore::url());
    }
}
