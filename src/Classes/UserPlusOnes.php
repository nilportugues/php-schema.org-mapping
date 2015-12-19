<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\OrganizerProperty organizer()
 * @method static \NilPortugues\SchemaOrg\Properties\AttendeeProperty attendee()
 * @method static \NilPortugues\SchemaOrg\Properties\AttendeesProperty attendees()
 * @method static \NilPortugues\SchemaOrg\Properties\DoorTimeProperty doorTime()
 * @method static \NilPortugues\SchemaOrg\Properties\DurationProperty duration()
 * @method static \NilPortugues\SchemaOrg\Properties\EndDateProperty endDate()
 * @method static \NilPortugues\SchemaOrg\Properties\EventStatusProperty eventStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\InLanguageProperty inLanguage()
 * @method static \NilPortugues\SchemaOrg\Properties\LocationProperty location()
 * @method static \NilPortugues\SchemaOrg\Properties\OffersProperty offers()
 * @method static \NilPortugues\SchemaOrg\Properties\PerformerProperty performer()
 * @method static \NilPortugues\SchemaOrg\Properties\PerformersProperty performers()
 * @method static \NilPortugues\SchemaOrg\Properties\PreviousStartDateProperty previousStartDate()
 * @method static \NilPortugues\SchemaOrg\Properties\RecordedInProperty recordedIn()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\StartDateProperty startDate()
 * @method static \NilPortugues\SchemaOrg\Properties\SubEventProperty subEvent()
 * @method static \NilPortugues\SchemaOrg\Properties\SubEventsProperty subEvents()
 * @method static \NilPortugues\SchemaOrg\Properties\SuperEventProperty superEvent()
 * @method static \NilPortugues\SchemaOrg\Properties\TypicalAgeRangeProperty typicalAgeRange()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkPerformedProperty workPerformed()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkFeaturedProperty workFeatured()
 * METHODEND.
 *
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use
 */
class UserPlusOnes extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/UserPlusOnes';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'attendee' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AttendeeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'attendees' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AttendeesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'doorTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DoorTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'duration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'endDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'eventStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EventStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'inLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'location' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'organizer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrganizerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'performer' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PerformerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'performers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PerformersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'previousStartDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PreviousStartDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'recordedIn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecordedInProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'startDate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StartDateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'subEvent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubEventProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'subEvents' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SubEventsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'superEvent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuperEventProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'typicalAgeRange' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TypicalAgeRangeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'workFeatured' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkFeaturedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
        'workPerformed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkPerformedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Event',
        ],
    ];
}
