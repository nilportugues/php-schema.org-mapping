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
use NilPortugues\SchemaOrg\Properties\CarrierProperty;
use NilPortugues\SchemaOrg\Properties\DeliveryAddressProperty;
use NilPortugues\SchemaOrg\Properties\DeliveryStatusProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\ExpectedArrivalFromProperty;
use NilPortugues\SchemaOrg\Properties\ExpectedArrivalUntilProperty;
use NilPortugues\SchemaOrg\Properties\HasDeliveryMethodProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\ItemShippedProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OriginAddressProperty;
use NilPortugues\SchemaOrg\Properties\PartOfOrderProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProviderProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\TrackingNumberProperty;
use NilPortugues\SchemaOrg\Properties\TrackingUrlProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes ParcelDelivery.
 */
class ParcelDelivery extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ParcelDelivery';

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
    public static function carrier()
    {
        return CarrierProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function deliveryAddress()
    {
        return DeliveryAddressProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function deliveryStatus()
    {
        return DeliveryStatusProperty::create(self::schemaUrl());
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
    public static function expectedArrivalFrom()
    {
        return ExpectedArrivalFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function expectedArrivalUntil()
    {
        return ExpectedArrivalUntilProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hasDeliveryMethod()
    {
        return HasDeliveryMethodProperty::create(self::schemaUrl());
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
    public static function itemShipped()
    {
        return ItemShippedProperty::create(self::schemaUrl());
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
    public static function originAddress()
    {
        return OriginAddressProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function partOfOrder()
    {
        return PartOfOrderProperty::create(self::schemaUrl());
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
    public static function trackingNumber()
    {
        return TrackingNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function trackingUrl()
    {
        return TrackingUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
