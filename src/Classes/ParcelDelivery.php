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
 * @method static \NilPortugues\SchemaOrg\Properties\CarrierProperty carrier()
 * @method static \NilPortugues\SchemaOrg\Properties\DeliveryAddressProperty deliveryAddress()
 * @method static \NilPortugues\SchemaOrg\Properties\DeliveryStatusProperty deliveryStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\ExpectedArrivalFromProperty expectedArrivalFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ExpectedArrivalUntilProperty expectedArrivalUntil()
 * @method static \NilPortugues\SchemaOrg\Properties\HasDeliveryMethodProperty hasDeliveryMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\ItemShippedProperty itemShipped()
 * @method static \NilPortugues\SchemaOrg\Properties\OriginAddressProperty originAddress()
 * @method static \NilPortugues\SchemaOrg\Properties\PartOfOrderProperty partOfOrder()
 * @method static \NilPortugues\SchemaOrg\Properties\TrackingNumberProperty trackingNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\TrackingUrlProperty trackingUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\ProviderProperty provider()
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
 * The delivery of a parcel either via the postal service or a commercial service.
 */
class ParcelDelivery extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/ParcelDelivery';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'carrier' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CarrierProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'deliveryAddress' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeliveryAddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'deliveryStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeliveryStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'expectedArrivalFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExpectedArrivalFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'expectedArrivalUntil' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExpectedArrivalUntilProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'hasDeliveryMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HasDeliveryMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'itemShipped' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ItemShippedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'originAddress' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OriginAddressProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'partOfOrder' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PartOfOrderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'provider' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProviderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'trackingNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrackingNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'trackingUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TrackingUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\ParcelDelivery',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
