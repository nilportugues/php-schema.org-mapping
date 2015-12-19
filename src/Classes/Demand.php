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
 * @method static \NilPortugues\SchemaOrg\Properties\AcceptedPaymentMethodProperty acceptedPaymentMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\AdvanceBookingRequirementProperty advanceBookingRequirement()
 * @method static \NilPortugues\SchemaOrg\Properties\AreaServedProperty areaServed()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailabilityProperty availability()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailabilityEndsProperty availabilityEnds()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailabilityStartsProperty availabilityStarts()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableAtOrFromProperty availableAtOrFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableDeliveryMethodProperty availableDeliveryMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty businessFunction()
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
 * @method static \NilPortugues\SchemaOrg\Properties\MpnProperty mpn()
 * @method static \NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty priceSpecification()
 * @method static \NilPortugues\SchemaOrg\Properties\SellerProperty seller()
 * @method static \NilPortugues\SchemaOrg\Properties\SerialNumberProperty serialNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\SkuProperty sku()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidFromProperty validFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidThroughProperty validThrough()
 * @method static \NilPortugues\SchemaOrg\Properties\WarrantyProperty warranty()
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
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive, announcement by an organization or person to seek a certain type of goods or services. For describing demand using this type, the very same properties used for Offer apply.
 */
class Demand extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Demand';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'acceptedPaymentMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AcceptedPaymentMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'advanceBookingRequirement' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdvanceBookingRequirementProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'areaServed' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AreaServedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'availability' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailabilityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'availabilityEnds' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailabilityEndsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'availabilityStarts' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailabilityStartsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'availableAtOrFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableAtOrFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'availableDeliveryMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableDeliveryMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'businessFunction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BusinessFunctionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'deliveryLeadTime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeliveryLeadTimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'eligibleCustomerType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleCustomerTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'eligibleDuration' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleDurationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'eligibleQuantity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleQuantityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'eligibleRegion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleRegionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'eligibleTransactionVolume' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EligibleTransactionVolumeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'gtin12' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin12Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'gtin13' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin13Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'gtin14' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin14Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'gtin8' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\Gtin8Property',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'includesObject' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IncludesObjectProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'ineligibleRegion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IneligibleRegionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'inventoryLevel' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InventoryLevelProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'itemCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'itemOffered' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemOfferedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mpn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MpnProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'priceSpecification' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PriceSpecificationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seller' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SellerProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'serialNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SerialNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'sku' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SkuProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'validFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'validThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
        'warranty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WarrantyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Demand',
        ],
    ];
}
