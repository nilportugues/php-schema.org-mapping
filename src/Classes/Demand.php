<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AcceptedPaymentMethodProperty;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AdvanceBookingRequirementProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\AreaServedProperty;
use NilPortugues\SchemaOrg\Properties\AvailabilityEndsProperty;
use NilPortugues\SchemaOrg\Properties\AvailabilityProperty;
use NilPortugues\SchemaOrg\Properties\AvailabilityStartsProperty;
use NilPortugues\SchemaOrg\Properties\AvailableAtOrFromProperty;
use NilPortugues\SchemaOrg\Properties\AvailableDeliveryMethodProperty;
use NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty;
use NilPortugues\SchemaOrg\Properties\DeliveryLeadTimeProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\EligibleCustomerTypeProperty;
use NilPortugues\SchemaOrg\Properties\EligibleDurationProperty;
use NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty;
use NilPortugues\SchemaOrg\Properties\EligibleRegionProperty;
use NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty;
use NilPortugues\SchemaOrg\Properties\Gtin12Property;
use NilPortugues\SchemaOrg\Properties\Gtin13Property;
use NilPortugues\SchemaOrg\Properties\Gtin14Property;
use NilPortugues\SchemaOrg\Properties\Gtin8Property;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IncludesObjectProperty;
use NilPortugues\SchemaOrg\Properties\IneligibleRegionProperty;
use NilPortugues\SchemaOrg\Properties\InventoryLevelProperty;
use NilPortugues\SchemaOrg\Properties\ItemConditionProperty;
use NilPortugues\SchemaOrg\Properties\ItemOfferedProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MpnProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SellerProperty;
use NilPortugues\SchemaOrg\Properties\SerialNumberProperty;
use NilPortugues\SchemaOrg\Properties\SkuProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\ValidFromProperty;
use NilPortugues\SchemaOrg\Properties\ValidThroughProperty;
use NilPortugues\SchemaOrg\Properties\WarrantyProperty;

/**
 * Classes Demand.
 */
class Demand
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/Demand';

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
    public static function acceptedPaymentMethod()
    {
        return AcceptedPaymentMethodProperty::create(self::schemaUrl());
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
    public static function advanceBookingRequirement()
    {
        return AdvanceBookingRequirementProperty::create(self::schemaUrl());
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
    public static function availability()
    {
        return AvailabilityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availabilityEnds()
    {
        return AvailabilityEndsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availabilityStarts()
    {
        return AvailabilityStartsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableAtOrFrom()
    {
        return AvailableAtOrFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableDeliveryMethod()
    {
        return AvailableDeliveryMethodProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function businessFunction()
    {
        return BusinessFunctionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function deliveryLeadTime()
    {
        return DeliveryLeadTimeProperty::create(self::schemaUrl());
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
    public static function eligibleCustomerType()
    {
        return EligibleCustomerTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eligibleDuration()
    {
        return EligibleDurationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eligibleQuantity()
    {
        return EligibleQuantityProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eligibleRegion()
    {
        return EligibleRegionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function eligibleTransactionVolume()
    {
        return EligibleTransactionVolumeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin12()
    {
        return Gtin12Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin13()
    {
        return Gtin13Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin14()
    {
        return Gtin14Property::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function gtin8()
    {
        return Gtin8Property::create(self::schemaUrl());
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
    public static function includesObject()
    {
        return IncludesObjectProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function ineligibleRegion()
    {
        return IneligibleRegionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function inventoryLevel()
    {
        return InventoryLevelProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function itemCondition()
    {
        return ItemConditionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function itemOffered()
    {
        return ItemOfferedProperty::create(self::schemaUrl());
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
    public static function mpn()
    {
        return MpnProperty::create(self::schemaUrl());
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
    public static function priceSpecification()
    {
        return PriceSpecificationProperty::create(self::schemaUrl());
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
    public static function seller()
    {
        return SellerProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function serialNumber()
    {
        return SerialNumberProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sku()
    {
        return SkuProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validFrom()
    {
        return ValidFromProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function validThrough()
    {
        return ValidThroughProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function warranty()
    {
        return WarrantyProperty::create(self::schemaUrl());
    }
}
