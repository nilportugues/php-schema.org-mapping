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
 * An identifier for the method of payment used (e.g. the last 4 digits of the credit card).
 */
class PaymentMethodIdProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/paymentMethodId';
    const PROPERTY_NAME = 'paymentMethodId';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
        'http://schema.org/Invoice',
    ];
}
