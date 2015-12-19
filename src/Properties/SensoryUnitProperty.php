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
 * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
 */
class SensoryUnitProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/sensoryUnit';
    const PROPERTY_NAME = 'sensoryUnit';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Nerve',
    ];
}
