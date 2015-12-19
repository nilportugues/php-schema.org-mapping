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

use NilPortugues\SchemaOrg\Classes\UserLikes;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes UserLikesTest.
 */
class UserLikesTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(UserLikes::schemaUrl(), 'http://schema.org/UserLikes');
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::aggregateRating());
    }

    public function testAttendeeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::attendee());
    }

    public function testAttendeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::attendees());
    }

    public function testDoorTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::doorTime());
    }

    public function testDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::duration());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::endDate());
    }

    public function testEventStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::eventStatus());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::inLanguage());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::location());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::offers());
    }

    public function testOrganizerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::organizer());
    }

    public function testPerformerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::performer());
    }

    public function testPerformersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::performers());
    }

    public function testPreviousStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::previousStartDate());
    }

    public function testRecordedInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::recordedIn());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::review());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::startDate());
    }

    public function testSubEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::subEvent());
    }

    public function testSubEventsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::subEvents());
    }

    public function testSuperEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::superEvent());
    }

    public function testTypicalAgeRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::typicalAgeRange());
    }

    public function testWorkFeaturedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::workFeatured());
    }

    public function testWorkPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UserLikes::workPerformed());
    }
}
