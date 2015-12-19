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

use NilPortugues\SchemaOrg\Classes\MotorcycleRepair;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MotorcycleRepairTest.
 */
class MotorcycleRepairTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MotorcycleRepair::schemaUrl(), 'http://schema.org/MotorcycleRepair');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::alternateName());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::branchCode());
    }

    public function testBranchOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::branchOf());
    }

    public function testCurrenciesAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::currenciesAccepted());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::name());
    }

    public function testOpeningHoursWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::openingHours());
    }

    public function testPaymentAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::paymentAccepted());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::potentialAction());
    }

    public function testPriceRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::priceRange());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MotorcycleRepair::url());
    }
}
