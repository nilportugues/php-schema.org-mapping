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

use NilPortugues\SchemaOrg\Classes\RealEstateAgent;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RealEstateAgentTest.
 */
class RealEstateAgentTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(RealEstateAgent::schemaUrl(), 'http://schema.org/RealEstateAgent');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::additionalProperty());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::address());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::aggregateRating());
    }

    public function testAlumniWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::alumni());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::areaServed());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::awards());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::branchCode());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::brand());
    }

    public function testContactPointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::contactPoint());
    }

    public function testContactPointsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::contactPoints());
    }

    public function testContainedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::containedIn());
    }

    public function testContainedInPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::containedInPlace());
    }

    public function testContainsPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::containsPlace());
    }

    public function testDepartmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::department());
    }

    public function testDissolutionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::dissolutionDate());
    }

    public function testDunsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::duns());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::email());
    }

    public function testEmployeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::employee());
    }

    public function testEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::employees());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::event());
    }

    public function testEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::events());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::faxNumber());
    }

    public function testFounderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::founder());
    }

    public function testFoundersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::founders());
    }

    public function testFoundingDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::foundingDate());
    }

    public function testGeoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::geo());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::globalLocationNumber());
    }

    public function testHasMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::hasMap());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::hasOfferCatalog());
    }

    public function testHasPOSWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::hasPOS());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::isicV4());
    }

    public function testLegalNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::legalName());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::location());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::logo());
    }

    public function testMakesOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::makesOffer());
    }

    public function testMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::map());
    }

    public function testMapsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::maps());
    }

    public function testMemberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::member());
    }

    public function testMemberOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::memberOf());
    }

    public function testMembersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::members());
    }

    public function testNaicsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::naics());
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::numberOfEmployees());
    }

    public function testOpeningHoursSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::openingHoursSpecification());
    }

    public function testOwnsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::owns());
    }

    public function testParentOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::parentOrganization());
    }

    public function testPhotoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::photo());
    }

    public function testPhotosWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::photos());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::reviews());
    }

    public function testSeeksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::seeks());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::serviceArea());
    }

    public function testSubOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::subOrganization());
    }

    public function testTaxIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::taxID());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::telephone());
    }

    public function testVatIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, RealEstateAgent::vatID());
    }
}
