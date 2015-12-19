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
 * The location of for example where the event is happening, an organization is located, or where an action takes place.
 */
class LocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/location';
    const PROPERTY_NAME = 'location';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Event',
        'http://schema.org/Action',
    ];
}
