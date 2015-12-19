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

use NilPortugues\SchemaOrg\Classes\InternetCafe;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InternetCafeTest.
 */
class InternetCafeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InternetCafe::schemaUrl(), 'http://schema.org/InternetCafe');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::additionalProperty());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::address());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::aggregateRating());
    }

    public function testAlumniWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::alumni());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::areaServed());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::awards());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::branchCode());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::brand());
    }

    public function testContactPointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::contactPoint());
    }

    public function testContactPointsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::contactPoints());
    }

    public function testContainedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::containedIn());
    }

    public function testContainedInPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::containedInPlace());
    }

    public function testContainsPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::containsPlace());
    }

    public function testDepartmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::department());
    }

    public function testDissolutionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::dissolutionDate());
    }

    public function testDunsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::duns());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::email());
    }

    public function testEmployeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::employee());
    }

    public function testEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::employees());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::event());
    }

    public function testEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::events());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::faxNumber());
    }

    public function testFounderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::founder());
    }

    public function testFoundersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::founders());
    }

    public function testFoundingDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::foundingDate());
    }

    public function testGeoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::geo());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::globalLocationNumber());
    }

    public function testHasMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::hasMap());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::hasOfferCatalog());
    }

    public function testHasPOSWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::hasPOS());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::isicV4());
    }

    public function testLegalNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::legalName());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::location());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::logo());
    }

    public function testMakesOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::makesOffer());
    }

    public function testMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::map());
    }

    public function testMapsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::maps());
    }

    public function testMemberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::member());
    }

    public function testMemberOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::memberOf());
    }

    public function testMembersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::members());
    }

    public function testNaicsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::naics());
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::numberOfEmployees());
    }

    public function testOpeningHoursSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::openingHoursSpecification());
    }

    public function testOwnsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::owns());
    }

    public function testParentOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::parentOrganization());
    }

    public function testPhotoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::photo());
    }

    public function testPhotosWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::photos());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::reviews());
    }

    public function testSeeksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::seeks());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::serviceArea());
    }

    public function testSubOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::subOrganization());
    }

    public function testTaxIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::taxID());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::telephone());
    }

    public function testVatIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InternetCafe::vatID());
    }
}
