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
 * The hours during which this service or contact is available.
 */
class HoursAvailableProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/hoursAvailable';
    const PROPERTY_NAME = 'hoursAvailable';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ContactPoint',
        'http://schema.org/Service',
    ];
}
