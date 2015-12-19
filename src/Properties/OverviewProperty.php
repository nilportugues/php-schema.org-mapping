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
 * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
 */
class OverviewProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/overview';
    const PROPERTY_NAME = 'overview';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
