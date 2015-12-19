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
 * @method static \NilPortugues\SchemaOrg\Properties\OrderQuantityProperty orderQuantity()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderItemStatusProperty orderItemStatus()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderItemNumberProperty orderItemNumber()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderDeliveryProperty orderDelivery()
 * @method static \NilPortugues\SchemaOrg\Properties\OrderedItemProperty orderedItem()
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
 * An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
 */
class OrderItem extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/OrderItem';

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
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'orderDelivery' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderDeliveryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OrderItem',
        ],
        'orderItemNumber' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderItemNumberProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OrderItem',
        ],
        'orderItemStatus' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderItemStatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OrderItem',
        ],
        'orderQuantity' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderQuantityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OrderItem',
        ],
        'orderedItem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OrderedItemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\OrderItem',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
