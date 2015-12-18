<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\BranchCode;
use NilPortugues\SchemaOrg\Properties\BranchOf;
use NilPortugues\SchemaOrg\Properties\CurrenciesAccepted;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\OpeningHours;
use NilPortugues\SchemaOrg\Properties\PaymentAccepted;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\PriceRange;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes InsuranceAgency.
 */
class InsuranceAgency
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/InsuranceAgency';

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
    public static function branchCode()
    {
        return BranchCode::create(LocalBusiness::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function branchOf()
    {
        return BranchOf::create(LocalBusiness::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function currenciesAccepted()
    {
        return CurrenciesAccepted::create(LocalBusiness::schemaUrl());
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
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
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
    public static function openingHours()
    {
        return OpeningHours::create(LocalBusiness::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function paymentAccepted()
    {
        return PaymentAccepted::create(LocalBusiness::schemaUrl());
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
    public static function priceRange()
    {
        return PriceRange::create(LocalBusiness::schemaUrl());
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
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
