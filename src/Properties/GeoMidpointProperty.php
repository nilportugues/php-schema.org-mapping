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
 * Indicates the GeoCoordinates at the centre of a GeoShape e.g. GeoCircle.
 */
class GeoMidpointProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/geoMidpoint';
    const PROPERTY_NAME = 'geoMidpoint';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GeoCircle',
    ];
}
