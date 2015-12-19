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
 * The payment method(s) to which the payment charge specification applies.
 */
class AppliesToPaymentMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/appliesToPaymentMethod';
    const PROPERTY_NAME = 'appliesToPaymentMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PaymentChargeSpecification',
    ];
}
