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
 * The distance travelled, e.g. exercising or travelling.
 */
class DistanceProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/distance';
    const PROPERTY_NAME = 'distance';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExerciseAction',
        'http://schema.org/TravelAction',
    ];
}
