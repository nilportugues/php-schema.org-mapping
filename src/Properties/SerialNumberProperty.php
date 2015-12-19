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
 * The serial number or any alphanumeric identifier of a particular product. When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
 */
class SerialNumberProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/serialNumber';
    const PROPERTY_NAME = 'serialNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
        'http://schema.org/IndividualProduct',
    ];
}
