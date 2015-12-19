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

use NilPortugues\SchemaOrg\Classes\OnDemandEvent;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OnDemandEventTest.
 */
class OnDemandEventTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OnDemandEvent::schemaUrl(), 'http://schema.org/OnDemandEvent');
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::aggregateRating());
    }

    public function testAttendeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::attendee());
    }

    public function testAttendeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::attendees());
    }

    public function testDoorTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::doorTime());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::duration());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::endDate());
    }

    public function testEventStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::eventStatus());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::inLanguage());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::location());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::offers());
    }

    public function testOrganizerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::organizer());
    }

    public function testPerformerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::performer());
    }

    public function testPerformersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::performers());
    }

    public function testPreviousStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::previousStartDate());
    }

    public function testRecordedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::recordedIn());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::review());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::startDate());
    }

    public function testSubEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::subEvent());
    }

    public function testSubEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::subEvents());
    }

    public function testSuperEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::superEvent());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::typicalAgeRange());
    }

    public function testWorkFeaturedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::workFeatured());
    }

    public function testWorkPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OnDemandEvent::workPerformed());
    }
}
