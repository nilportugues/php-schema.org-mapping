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
 * A sub property of location. The entertainment business where the action occurred.
 */
class EntertainmentBusinessProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/entertainmentBusiness';
    const PROPERTY_NAME = 'entertainmentBusiness';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PerformAction',
    ];
}
