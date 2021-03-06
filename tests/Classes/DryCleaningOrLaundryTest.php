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

use NilPortugues\SchemaOrg\Classes\DryCleaningOrLaundry;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DryCleaningOrLaundryTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DryCleaningOrLaundryTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DryCleaningOrLaundry::schemaUrl(), "http://schema.org/DryCleaningOrLaundry");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::additionalProperty());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::additionalType());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::address());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::alternateName());
    }

    public function testAlumniWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::alumni());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::areaServed());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::awards());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::branchCode());
    }

    public function testBranchOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::branchOf());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::brand());
    }

    public function testContactPointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::contactPoint());
    }

    public function testContactPointsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::contactPoints());
    }

    public function testContainedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::containedIn());
    }

    public function testContainedInPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::containedInPlace());
    }

    public function testContainsPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::containsPlace());
    }

    public function testCurrenciesAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::currenciesAccepted());
    }

    public function testDepartmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::department());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::description());
    }

    public function testDissolutionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::dissolutionDate());
    }

    public function testDunsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::duns());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::email());
    }

    public function testEmployeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::employee());
    }

    public function testEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::employees());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::event());
    }

    public function testEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::events());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::faxNumber());
    }

    public function testFounderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::founder());
    }

    public function testFoundersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::founders());
    }

    public function testFoundingDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::foundingDate());
    }

    public function testGeoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::geo());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::globalLocationNumber());
    }

    public function testHasMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::hasMap());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::hasOfferCatalog());
    }

    public function testHasPOSWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::hasPOS());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::image());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::isicV4());
    }

    public function testLegalNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::legalName());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::location());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::logo());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::mainEntityOfPage());
    }

    public function testMakesOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::makesOffer());
    }

    public function testMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::map());
    }

    public function testMapsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::maps());
    }

    public function testMemberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::member());
    }

    public function testMemberOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::memberOf());
    }

    public function testMembersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::members());
    }

    public function testNaicsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::naics());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::name());
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::numberOfEmployees());
    }

    public function testOpeningHoursWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::openingHours());
    }

    public function testOpeningHoursSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::openingHoursSpecification());
    }

    public function testOwnsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::owns());
    }

    public function testParentOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::parentOrganization());
    }

    public function testPaymentAcceptedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::paymentAccepted());
    }

    public function testPhotoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::photo());
    }

    public function testPhotosWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::photos());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::potentialAction());
    }

    public function testPriceRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::priceRange());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::sameAs());
    }

    public function testSeeksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::seeks());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::serviceArea());
    }

    public function testSubOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::subOrganization());
    }

    public function testTaxIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::taxID());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::telephone());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::url());
    }

    public function testVatIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DryCleaningOrLaundry::vatID());
    }
}