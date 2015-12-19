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

use NilPortugues\SchemaOrg\Classes\LodgingBusiness;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes LodgingBusinessTest.
 */
class LodgingBusinessTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LodgingBusiness::schemaUrl(), 'http://schema.org/LodgingBusiness');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::additionalProperty());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::address());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::aggregateRating());
    }

    public function testAlumniWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::alumni());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::areaServed());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::awards());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::branchCode());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::brand());
    }

    public function testContactPointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::contactPoint());
    }

    public function testContactPointsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::contactPoints());
    }

    public function testContainedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::containedIn());
    }

    public function testContainedInPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::containedInPlace());
    }

    public function testContainsPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::containsPlace());
    }

    public function testDepartmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::department());
    }

    public function testDissolutionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::dissolutionDate());
    }

    public function testDunsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::duns());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::email());
    }

    public function testEmployeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::employee());
    }

    public function testEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::employees());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::event());
    }

    public function testEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::events());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::faxNumber());
    }

    public function testFounderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::founder());
    }

    public function testFoundersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::founders());
    }

    public function testFoundingDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::foundingDate());
    }

    public function testGeoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::geo());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::globalLocationNumber());
    }

    public function testHasMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::hasMap());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::hasOfferCatalog());
    }

    public function testHasPOSWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::hasPOS());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::isicV4());
    }

    public function testLegalNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::legalName());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::location());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::logo());
    }

    public function testMakesOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::makesOffer());
    }

    public function testMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::map());
    }

    public function testMapsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::maps());
    }

    public function testMemberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::member());
    }

    public function testMemberOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::memberOf());
    }

    public function testMembersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::members());
    }

    public function testNaicsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::naics());
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::numberOfEmployees());
    }

    public function testOpeningHoursSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::openingHoursSpecification());
    }

    public function testOwnsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::owns());
    }

    public function testParentOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::parentOrganization());
    }

    public function testPhotoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::photo());
    }

    public function testPhotosWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::photos());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::reviews());
    }

    public function testSeeksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::seeks());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::serviceArea());
    }

    public function testSubOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::subOrganization());
    }

    public function testTaxIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::taxID());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::telephone());
    }

    public function testVatIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LodgingBusiness::vatID());
    }
}
