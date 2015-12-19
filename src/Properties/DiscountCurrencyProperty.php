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

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * The currency (in 3-letter ISO 4217 format) of the discount.
 */
class DiscountCurrencyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/discountCurrency';
    const PROPERTY_NAME = 'discountCurrency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
