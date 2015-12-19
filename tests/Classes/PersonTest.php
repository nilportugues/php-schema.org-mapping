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

use NilPortugues\SchemaOrg\Classes\Person;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PersonTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PersonTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Person::schemaUrl(), "http://schema.org/Person");
    }

    public function testAdditionalNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::additionalName());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::address());
    }

    public function testAffiliationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::affiliation());
    }

    public function testAlumniOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::alumniOf());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::awards());
    }

    public function testBirthDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::birthDate());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::brand());
    }

    public function testChildrenWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::children());
    }

    public function testColleagueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::colleague());
    }

    public function testColleaguesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::colleagues());
    }

    public function testContactPointWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::contactPoint());
    }

    public function testContactPointsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::contactPoints());
    }

    public function testDeathDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::deathDate());
    }

    public function testDunsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::duns());
    }

    public function testEmailWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::email());
    }

    public function testFamilyNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::familyName());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::faxNumber());
    }

    public function testFollowsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::follows());
    }

    public function testGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::gender());
    }

    public function testGivenNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::givenName());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::globalLocationNumber());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::hasOfferCatalog());
    }

    public function testHasPOSWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::hasPOS());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::height());
    }

    public function testHomeLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::homeLocation());
    }

    public function testHonorificPrefixWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::honorificPrefix());
    }

    public function testHonorificSuffixWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::honorificSuffix());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::isicV4());
    }

    public function testJobTitleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::jobTitle());
    }

    public function testKnowsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::knows());
    }

    public function testMakesOfferWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::makesOffer());
    }

    public function testMemberOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::memberOf());
    }

    public function testNaicsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::naics());
    }

    public function testNationalityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::nationality());
    }

    public function testNetWorthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::netWorth());
    }

    public function testOwnsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::owns());
    }

    public function testParentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::parent());
    }

    public function testParentsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::parents());
    }

    public function testPerformerInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::performerIn());
    }

    public function testRelatedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::relatedTo());
    }

    public function testSeeksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::seeks());
    }

    public function testSiblingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::sibling());
    }

    public function testSiblingsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::siblings());
    }

    public function testSpouseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::spouse());
    }

    public function testTaxIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::taxID());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::telephone());
    }

    public function testVatIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::vatID());
    }

    public function testWeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::weight());
    }

    public function testWorkLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::workLocation());
    }

    public function testWorksForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Person::worksFor());
    }
}