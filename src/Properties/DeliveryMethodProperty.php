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
 * A sub property of instrument. The method of delivery.
 */
class DeliveryMethodProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/deliveryMethod';
    const PROPERTY_NAME = 'deliveryMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OrderAction',
        'http://schema.org/ReceiveAction',
        'http://schema.org/SendAction',
        'http://schema.org/TrackAction',
    ];
}
