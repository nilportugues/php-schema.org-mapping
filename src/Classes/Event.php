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
 * Classes Event
 * @package NilPortugues\SchemaOrg\Classes
 *
 * An event happening at a certain time and location, such as a concert, lecture, or festival. Ticketing information may be added via the 'offers' property. Repeated events may be structured as separate Event objects.
 */
class Event
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Event";

   /**
    * Returns the URL of the current definition at http://schema.org
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
        return AggregateRating::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function attendee()
    {
        return Attendee::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function attendees()
    {
        return Attendees::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function doorTime()
    {
        return DoorTime::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function duration()
    {
        return Duration::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function endDate()
    {
        return EndDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function eventStatus()
    {
        return EventStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function inLanguage()
    {
        return InLanguage::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function location()
    {
        return Location::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function offers()
    {
        return Offers::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function organizer()
    {
        return Organizer::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function performer()
    {
        return Performer::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function performers()
    {
        return Performers::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function previousStartDate()
    {
        return PreviousStartDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function recordedIn()
    {
        return RecordedIn::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function review()
    {
        return Review::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function startDate()
    {
        return StartDate::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function subEvent()
    {
        return SubEvent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function subEvents()
    {
        return SubEvents::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function superEvent()
    {
        return SuperEvent::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function typicalAgeRange()
    {
        return TypicalAgeRange::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function workFeatured()
    {
        return WorkFeatured::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function workPerformed()
    {
        return WorkPerformed::create(self::schemaUrl());
    }
}