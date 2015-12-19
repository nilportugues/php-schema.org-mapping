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
 * Textual description of the unit type (including suite vs. room, size of bed, etc.).
 */
class LodgingUnitTypeProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/lodgingUnitType';
    const PROPERTY_NAME = 'lodgingUnitType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}
