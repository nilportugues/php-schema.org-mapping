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

use NilPortugues\SchemaOrg\Classes\NightClub;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes NightClubTest.
 */
class NightClubTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(NightClub::schemaUrl(), 'http://schema.org/NightClub');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::alternateName());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::branchCode());
    }

    public function testBranchOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::branchOf());
    }

    public function testCurrenciesAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::currenciesAccepted());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::name());
    }

    public function testOpeningHoursWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::openingHours());
    }

    public function testPaymentAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::paymentAccepted());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::potentialAction());
    }

    public function testPriceRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::priceRange());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, NightClub::url());
    }
}
