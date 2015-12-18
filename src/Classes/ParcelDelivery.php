<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\Carrier;
use NilPortugues\SchemaOrg\Properties\DeliveryAddress;
use NilPortugues\SchemaOrg\Properties\DeliveryStatus;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\ExpectedArrivalFrom;
use NilPortugues\SchemaOrg\Properties\ExpectedArrivalUntil;
use NilPortugues\SchemaOrg\Properties\HasDeliveryMethod;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\ItemShipped;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\OriginAddress;
use NilPortugues\SchemaOrg\Properties\PartOfOrder;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Provider;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\TrackingNumber;
use NilPortugues\SchemaOrg\Properties\TrackingUrl;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes ParcelDelivery
 * @package NilPortugues\SchemaOrg\Classes
 *
 * The delivery of a parcel either via the postal service or a commercial service.
 */
class ParcelDelivery
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/ParcelDelivery";

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
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function carrier()
    {
        return Carrier::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function deliveryAddress()
    {
        return DeliveryAddress::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function deliveryStatus()
    {
        return DeliveryStatus::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function expectedArrivalFrom()
    {
        return ExpectedArrivalFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function expectedArrivalUntil()
    {
        return ExpectedArrivalUntil::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function hasDeliveryMethod()
    {
        return HasDeliveryMethod::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function itemShipped()
    {
        return ItemShipped::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function originAddress()
    {
        return OriginAddress::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function partOfOrder()
    {
        return PartOfOrder::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function provider()
    {
        return Provider::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function trackingNumber()
    {
        return TrackingNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function trackingUrl()
    {
        return TrackingUrl::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}