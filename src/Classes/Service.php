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
use NilPortugues\SchemaOrg\Properties\AggregateRatingProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AreaServedProperty;
use NilPortugues\SchemaOrg\Properties\AvailableChannelProperty;
use NilPortugues\SchemaOrg\Properties\AwardProperty;
use NilPortugues\SchemaOrg\Properties\CategoryProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\HasOfferCatalogProperty;
use NilPortugues\SchemaOrg\Properties\HoursAvailableProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OffersProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProducesProperty;
use NilPortugues\SchemaOrg\Properties\ProviderMobilityProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\ReviewProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\ServiceAreaProperty;
use NilPortugues\SchemaOrg\Properties\ServiceAudienceProperty;
use NilPortugues\SchemaOrg\Properties\ServiceOutputProperty;
use NilPortugues\SchemaOrg\Properties\ServiceTypeProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;

/**
 * Classes Service.
 */
class Service
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Service';

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
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function aggregateRating()
    {
        return AggregateRatingProperty::create(self::schemaUrl());
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
    public static function areaServed()
    {
        return AreaServedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableChannel()
    {
        return AvailableChannelProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function award()
    {
        return AwardProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function category()
    {
        return CategoryProperty::create(self::schemaUrl());
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
    public static function hasOfferCatalog()
    {
        return HasOfferCatalogProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hoursAvailable()
    {
        return HoursAvailableProperty::create(self::schemaUrl());
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
    public static function offers()
    {
        return OffersProperty::create(self::schemaUrl());
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
    public static function produces()
    {
        return ProducesProperty::create(self::schemaUrl());
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
    public static function providerMobility()
    {
        return ProviderMobilityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function review()
    {
        return ReviewProperty::create(self::schemaUrl());
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
    public static function serviceArea()
    {
        return ServiceAreaProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceAudience()
    {
        return ServiceAudienceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceOutput()
    {
        return ServiceOutputProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serviceType()
    {
        return ServiceTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
