<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AcceptedPaymentMethod;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AdvanceBookingRequirement;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\AreaServed;
use NilPortugues\SchemaOrg\Properties\Availability;
use NilPortugues\SchemaOrg\Properties\AvailabilityEnds;
use NilPortugues\SchemaOrg\Properties\AvailabilityStarts;
use NilPortugues\SchemaOrg\Properties\AvailableAtOrFrom;
use NilPortugues\SchemaOrg\Properties\AvailableDeliveryMethod;
use NilPortugues\SchemaOrg\Properties\BusinessFunction;
use NilPortugues\SchemaOrg\Properties\DeliveryLeadTime;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\EligibleCustomerType;
use NilPortugues\SchemaOrg\Properties\EligibleDuration;
use NilPortugues\SchemaOrg\Properties\EligibleQuantity;
use NilPortugues\SchemaOrg\Properties\EligibleRegion;
use NilPortugues\SchemaOrg\Properties\EligibleTransactionVolume;
use NilPortugues\SchemaOrg\Properties\Gtin12;
use NilPortugues\SchemaOrg\Properties\Gtin13;
use NilPortugues\SchemaOrg\Properties\Gtin14;
use NilPortugues\SchemaOrg\Properties\Gtin8;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\IncludesObject;
use NilPortugues\SchemaOrg\Properties\IneligibleRegion;
use NilPortugues\SchemaOrg\Properties\InventoryLevel;
use NilPortugues\SchemaOrg\Properties\ItemCondition;
use NilPortugues\SchemaOrg\Properties\ItemOffered;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Mpn;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PriceSpecification;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Seller;
use NilPortugues\SchemaOrg\Properties\SerialNumber;
use NilPortugues\SchemaOrg\Properties\Sku;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\ValidFrom;
use NilPortugues\SchemaOrg\Properties\ValidThrough;
use NilPortugues\SchemaOrg\Properties\Warranty;

/**
 * Classes Demand
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 */
class Demand
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/Demand";

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
    public static function acceptedPaymentMethod()
    {
        return AcceptedPaymentMethod::create(self::schemaUrl());
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
    public static function advanceBookingRequirement()
    {
        return AdvanceBookingRequirement::create(self::schemaUrl());
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
    public static function areaServed()
    {
        return AreaServed::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availability()
    {
        return Availability::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availabilityEnds()
    {
        return AvailabilityEnds::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availabilityStarts()
    {
        return AvailabilityStarts::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availableAtOrFrom()
    {
        return AvailableAtOrFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function availableDeliveryMethod()
    {
        return AvailableDeliveryMethod::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function businessFunction()
    {
        return BusinessFunction::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function deliveryLeadTime()
    {
        return DeliveryLeadTime::create(self::schemaUrl());
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
    public static function eligibleCustomerType()
    {
        return EligibleCustomerType::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function eligibleDuration()
    {
        return EligibleDuration::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function eligibleQuantity()
    {
        return EligibleQuantity::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function eligibleRegion()
    {
        return EligibleRegion::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function eligibleTransactionVolume()
    {
        return EligibleTransactionVolume::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function gtin12()
    {
        return Gtin12::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function gtin13()
    {
        return Gtin13::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function gtin14()
    {
        return Gtin14::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function gtin8()
    {
        return Gtin8::create(self::schemaUrl());
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
    public static function includesObject()
    {
        return IncludesObject::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function ineligibleRegion()
    {
        return IneligibleRegion::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function inventoryLevel()
    {
        return InventoryLevel::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function itemCondition()
    {
        return ItemCondition::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function itemOffered()
    {
        return ItemOffered::create(self::schemaUrl());
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
    public static function mpn()
    {
        return Mpn::create(self::schemaUrl());
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
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function priceSpecification()
    {
        return PriceSpecification::create(self::schemaUrl());
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
    public static function seller()
    {
        return Seller::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function serialNumber()
    {
        return SerialNumber::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function sku()
    {
        return Sku::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validFrom()
    {
        return ValidFrom::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function validThrough()
    {
        return ValidThrough::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function warranty()
    {
        return Warranty::create(self::schemaUrl());
    }
}