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

use NilPortugues\SchemaOrg\Classes\Notary;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes NotaryTest.
 */
class NotaryTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Notary::schemaUrl(), 'http://schema.org/Notary');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::alternateName());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::branchCode());
    }

    public function testBranchOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::branchOf());
    }

    public function testCurrenciesAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::currenciesAccepted());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::name());
    }

    public function testOpeningHoursWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::openingHours());
    }

    public function testPaymentAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::paymentAccepted());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::potentialAction());
    }

    public function testPriceRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::priceRange());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Notary::url());
    }
}
