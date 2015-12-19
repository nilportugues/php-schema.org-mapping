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

use NilPortugues\SchemaOrg\Classes\BusStop;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusStopTest.
 */
class BusStopTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusStop::schemaUrl(), 'http://schema.org/BusStop');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::additionalProperty());
    }

    public function testAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::address());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::aggregateRating());
    }

    public function testBranchCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::branchCode());
    }

    public function testContainedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::containedIn());
    }

    public function testContainedInPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::containedInPlace());
    }

    public function testContainsPlaceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::containsPlace());
    }

    public function testEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::event());
    }

    public function testEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::events());
    }

    public function testFaxNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::faxNumber());
    }

    public function testGeoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::geo());
    }

    public function testGlobalLocationNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::globalLocationNumber());
    }

    public function testHasMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::hasMap());
    }

    public function testIsicV4WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::isicV4());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::logo());
    }

    public function testMapWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::map());
    }

    public function testMapsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::maps());
    }

    public function testOpeningHoursSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::openingHoursSpecification());
    }

    public function testPhotoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::photo());
    }

    public function testPhotosWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::photos());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::reviews());
    }

    public function testTelephoneWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusStop::telephone());
    }
}
