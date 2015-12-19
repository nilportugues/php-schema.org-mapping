<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of the item ordered. If the property is not set, assume the quantity is one.
 */
class OrderQuantityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/orderQuantity';
    const PROPERTY_NAME = 'orderQuantity';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OrderItem',
    ];
}
