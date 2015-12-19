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

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\HighPriceProperty highPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\LowPriceProperty lowPrice()
 * @method static \NilPortugues\SchemaOrg\Properties\OfferCountProperty offerCount()
 * @method static \NilPortugues\SchemaOrg\Properties\OffersProperty offers()
 * @method static \NilPortugues\SchemaOrg\Properties\AcceptedPaymentMethodProperty acceptedPaymentMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\AddOnProperty addOn()
 * @method static \NilPortugues\SchemaOrg\Properties\AdvanceBookingRequirementProperty advanceBookingRequirement()
 * @method static \NilPortugues\SchemaOrg\Properties\AggregateRatingProperty aggregateRating()
 * @method static \NilPortugues\SchemaOrg\Properties\AreaServedProperty areaServed()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailabilityProperty availability()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailabilityEndsProperty availabilityEnds()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailabilityStartsProperty availabilityStarts()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableAtOrFromProperty availableAtOrFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableDeliveryMethodProperty availableDeliveryMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty businessFunction()
 * @method static \NilPortugues\SchemaOrg\Properties\CategoryProperty category()
 * @method static \NilPortugues\SchemaOrg\Properties\DeliveryLeadTimeProperty deliveryLeadTime()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleCustomerTypeProperty eligibleCustomerType()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleDurationProperty eligibleDuration()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty eligibleQuantity()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleRegionProperty eligibleRegion()
 * @method static \NilPortugues\SchemaOrg\Properties\IneligibleRegionProperty ineligibleRegion()
 * @method static \NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty eligibleTransactionVolume()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin12Property gtin12()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin13Property gtin13()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin14Property gtin14()
 * @method static \NilPortugues\SchemaOrg\Properties\Gtin8Property gtin8()
 * @method static \NilPortugues\SchemaOrg\Properties\IncludesObjectProperty includesObject()
 * @method static \NilPortugues\SchemaOrg\Properties\InventoryLevelProperty inventoryLevel()
 * @method static \NilPortugues\SchemaOrg\Properties\ItemConditionProperty itemCondition()
 * @method static \NilPortugues\SchemaOrg\Properties\ItemOfferedProperty itemOffered()
 * @method static \NilPortugues\SchemaOrg\Properties\OfferedByProperty offeredBy()
 * @method static \NilPortugues\SchemaOrg\Properties\MpnProperty mpn()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceProperty price()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty priceSpecification()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceValidUntilProperty priceValidUntil()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewProperty review()
 * @method static \NilPortugues\SchemaOrg\Properties\ReviewsProperty reviews()
 * @method static \NilPortugues\SchemaOrg\Properties\SellerProperty seller()
 * @method static \NilPortugues\SchemaOrg\Properties\SerialNumberProperty serialNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\SkuProperty sku()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidFromProperty validFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidThroughProperty validThrough()
 * @method static \NilPortugues\SchemaOrg\Properties\WarrantyProperty warranty()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty priceCurrency()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.
 */
class AggregateOffer extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/AggregateOffer';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'acceptedPaymentMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AcceptedPaymentMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'addOn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AddOnProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'advanceBookingRequirement' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdvanceBookingRequirementProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'aggregateRating' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AggregateRatingProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'areaServed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaServedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'availability' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailabilityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'availabilityEnds' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailabilityEndsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'availabilityStarts' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailabilityStartsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'availableAtOrFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableAtOrFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'availableDeliveryMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableDeliveryMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'businessFunction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'category' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'deliveryLeadTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeliveryLeadTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'eligibleCustomerType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleCustomerTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'eligibleDuration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleDurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'eligibleQuantity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'eligibleRegion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleRegionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'eligibleTransactionVolume' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'gtin12' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin12Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'gtin13' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin13Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'gtin14' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin14Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'gtin8' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin8Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'highPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HighPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'includesObject' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IncludesObjectProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'ineligibleRegion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IneligibleRegionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'inventoryLevel' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InventoryLevelProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'itemCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'itemOffered' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemOfferedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'lowPrice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\LowPriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mpn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MpnProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'offerCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OfferCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'offeredBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OfferedByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'offers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OffersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\AggregateOffer',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'price' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'priceCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'priceSpecification' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'priceValidUntil' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceValidUntilProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'review' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'reviews' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReviewsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seller' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SellerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'serialNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SerialNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'sku' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SkuProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'validFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'validThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
        'warranty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WarrantyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Offer',
        ],
    ];
}
