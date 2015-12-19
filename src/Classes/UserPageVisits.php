<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AttendeeProperty;
use NilPortugues\SchemaOrg\Properties\AttendeesProperty;
use NilPortugues\SchemaOrg\Properties\DoorTimeProperty;
use NilPortugues\SchemaOrg\Properties\DurationProperty;
use NilPortugues\SchemaOrg\Properties\EndDateProperty;
use NilPortugues\SchemaOrg\Properties\EventStatusProperty;
use NilPortugues\SchemaOrg\Properties\InLanguageProperty;
use NilPortugues\SchemaOrg\Properties\LocationProperty;
use NilPortugues\SchemaOrg\Properties\OffersProperty;
use NilPortugues\SchemaOrg\Properties\OrganizerProperty;
use NilPortugues\SchemaOrg\Properties\PerformerProperty;
use NilPortugues\SchemaOrg\Properties\PerformersProperty;
use NilPortugues\SchemaOrg\Properties\PreviousStartDateProperty;
use NilPortugues\SchemaOrg\Properties\RecordedInProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\StartDateProperty;
use NilPortugues\SchemaOrg\Properties\SubEventProperty;
use NilPortugues\SchemaOrg\Properties\SubEventsProperty;
use NilPortugues\SchemaOrg\Properties\SuperEventProperty;
use NilPortugues\SchemaOrg\Properties\TypicalAgeRangeProperty;
use NilPortugues\SchemaOrg\Properties\WorkFeaturedProperty;
use NilPortugues\SchemaOrg\Properties\WorkPerformedProperty;

/**
 * Classes UserPageVisits.
 */
class UserPageVisits
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/UserPageVisits';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function attendee()
    {
        return AttendeeProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function attendees()
    {
        return AttendeesProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function doorTime()
    {
        return DoorTimeProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duration()
    {
        return DurationProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function endDate()
    {
        return EndDateProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eventStatus()
    {
        return EventStatusProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function inLanguage()
    {
        return InLanguageProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return LocationProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return OffersProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function organizer()
    {
        return OrganizerProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function performer()
    {
        return PerformerProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function performers()
    {
        return PerformersProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function previousStartDate()
    {
        return PreviousStartDateProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recordedIn()
    {
        return RecordedInProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return ReviewProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function startDate()
    {
        return StartDateProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subEvent()
    {
        return SubEventProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subEvents()
    {
        return SubEventsProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function superEvent()
    {
        return SuperEventProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typicalAgeRange()
    {
        return TypicalAgeRangeProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workFeatured()
    {
        return WorkFeaturedProperty::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workPerformed()
    {
        return WorkPerformedProperty::create(Event::schemaUrl());
    }
}
