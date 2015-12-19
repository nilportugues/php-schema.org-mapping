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
 * A pointer to another product (or multiple products) for which this product is an accessory or spare part.
 */
class IsAccessoryOrSparePartForProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isAccessoryOrSparePartFor';
    const PROPERTY_NAME = 'isAccessoryOrSparePartFor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
