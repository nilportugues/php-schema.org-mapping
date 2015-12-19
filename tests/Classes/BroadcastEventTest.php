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

use NilPortugues\SchemaOrg\Classes\BroadcastEvent;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BroadcastEventTest.
 */
class BroadcastEventTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BroadcastEvent::schemaUrl(), 'http://schema.org/BroadcastEvent');
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::aggregateRating());
    }

    public function testAttendeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::attendee());
    }

    public function testAttendeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::attendees());
    }

    public function testDoorTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::doorTime());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::duration());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::endDate());
    }

    public function testEventStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::eventStatus());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::inLanguage());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::location());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::offers());
    }

    public function testOrganizerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::organizer());
    }

    public function testPerformerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::performer());
    }

    public function testPerformersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::performers());
    }

    public function testPreviousStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::previousStartDate());
    }

    public function testRecordedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::recordedIn());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::review());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::startDate());
    }

    public function testSubEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::subEvent());
    }

    public function testSubEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::subEvents());
    }

    public function testSuperEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::superEvent());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::typicalAgeRange());
    }

    public function testVideoFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::videoFormat());
    }

    public function testWorkFeaturedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::workFeatured());
    }

    public function testWorkPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastEvent::workPerformed());
    }
}
