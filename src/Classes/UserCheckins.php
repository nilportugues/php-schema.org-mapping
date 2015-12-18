<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AggregateRating;
use NilPortugues\SchemaOrg\Properties\Attendee;
use NilPortugues\SchemaOrg\Properties\Attendees;
use NilPortugues\SchemaOrg\Properties\DoorTime;
use NilPortugues\SchemaOrg\Properties\Duration;
use NilPortugues\SchemaOrg\Properties\EndDate;
use NilPortugues\SchemaOrg\Properties\EventStatus;
use NilPortugues\SchemaOrg\Properties\InLanguage;
use NilPortugues\SchemaOrg\Properties\Location;
use NilPortugues\SchemaOrg\Properties\Offers;
use NilPortugues\SchemaOrg\Properties\Organizer;
use NilPortugues\SchemaOrg\Properties\Performer;
use NilPortugues\SchemaOrg\Properties\Performers;
use NilPortugues\SchemaOrg\Properties\PreviousStartDate;
use NilPortugues\SchemaOrg\Properties\RecordedIn;
use NilPortugues\SchemaOrg\Properties\Review;
use NilPortugues\SchemaOrg\Properties\StartDate;
use NilPortugues\SchemaOrg\Properties\SubEvent;
use NilPortugues\SchemaOrg\Properties\SubEvents;
use NilPortugues\SchemaOrg\Properties\SuperEvent;
use NilPortugues\SchemaOrg\Properties\TypicalAgeRange;
use NilPortugues\SchemaOrg\Properties\WorkFeatured;
use NilPortugues\SchemaOrg\Properties\WorkPerformed;

/**
 * Classes UserCheckins.
 */
class UserCheckins
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/UserCheckins';

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
        return AggregateRating::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function attendee()
    {
        return Attendee::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function attendees()
    {
        return Attendees::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function doorTime()
    {
        return DoorTime::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function duration()
    {
        return Duration::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function endDate()
    {
        return EndDate::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eventStatus()
    {
        return EventStatus::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function inLanguage()
    {
        return InLanguage::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function location()
    {
        return Location::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function offers()
    {
        return Offers::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function organizer()
    {
        return Organizer::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function performer()
    {
        return Performer::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function performers()
    {
        return Performers::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function previousStartDate()
    {
        return PreviousStartDate::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function recordedIn()
    {
        return RecordedIn::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return Review::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function startDate()
    {
        return StartDate::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subEvent()
    {
        return SubEvent::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function subEvents()
    {
        return SubEvents::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function superEvent()
    {
        return SuperEvent::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function typicalAgeRange()
    {
        return TypicalAgeRange::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workFeatured()
    {
        return WorkFeatured::create(Event::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workPerformed()
    {
        return WorkPerformed::create(Event::schemaUrl());
    }
}
