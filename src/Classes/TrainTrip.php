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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalPlatformProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalStationProperty;
use NilPortugues\SchemaOrg\Properties\ArrivalTimeProperty;
use NilPortugues\SchemaOrg\Properties\DeparturePlatformProperty;
use NilPortugues\SchemaOrg\Properties\DepartureStationProperty;
use NilPortugues\SchemaOrg\Properties\DepartureTimeProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TrainNameProperty;
use NilPortugues\SchemaOrg\Properties\TrainNumberProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes TrainTrip.
 */
class TrainTrip extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/TrainTrip';

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function arrivalPlatform()
    {
        return ArrivalPlatformProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function arrivalStation()
    {
        return ArrivalStationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function arrivalTime()
    {
        return ArrivalTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departurePlatform()
    {
        return DeparturePlatformProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureStation()
    {
        return DepartureStationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function departureTime()
    {
        return DepartureTimeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function provider()
    {
        return ProviderProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function trainName()
    {
        return TrainNameProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function trainNumber()
    {
        return TrainNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
