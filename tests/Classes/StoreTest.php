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

use NilPortugues\SchemaOrg\Classes\Store;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes StoreTest.
 */
class StoreTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Store::schemaUrl(), 'http://schema.org/Store');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::additionalProperty());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::address());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::aggregateRating());
    }

    public function testAlumniWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::alumni());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::areaServed());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::awards());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::branchCode());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::brand());
    }

    public function testContactPointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::contactPoint());
    }

    public function testContactPointsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::contactPoints());
    }

    public function testContainedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::containedIn());
    }

    public function testContainedInPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::containedInPlace());
    }

    public function testContainsPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::containsPlace());
    }

    public function testDepartmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::department());
    }

    public function testDissolutionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::dissolutionDate());
    }

    public function testDunsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::duns());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::email());
    }

    public function testEmployeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::employee());
    }

    public function testEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::employees());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::event());
    }

    public function testEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::events());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::faxNumber());
    }

    public function testFounderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::founder());
    }

    public function testFoundersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::founders());
    }

    public function testFoundingDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::foundingDate());
    }

    public function testGeoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::geo());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::globalLocationNumber());
    }

    public function testHasMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::hasMap());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::hasOfferCatalog());
    }

    public function testHasPOSWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::hasPOS());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::isicV4());
    }

    public function testLegalNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::legalName());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::location());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::logo());
    }

    public function testMakesOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::makesOffer());
    }

    public function testMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::map());
    }

    public function testMapsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::maps());
    }

    public function testMemberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::member());
    }

    public function testMemberOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::memberOf());
    }

    public function testMembersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::members());
    }

    public function testNaicsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::naics());
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::numberOfEmployees());
    }

    public function testOpeningHoursSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::openingHoursSpecification());
    }

    public function testOwnsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::owns());
    }

    public function testParentOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::parentOrganization());
    }

    public function testPhotoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::photo());
    }

    public function testPhotosWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::photos());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::reviews());
    }

    public function testSeeksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::seeks());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::serviceArea());
    }

    public function testSubOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::subOrganization());
    }

    public function testTaxIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::taxID());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::telephone());
    }

    public function testVatIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Store::vatID());
    }
}
