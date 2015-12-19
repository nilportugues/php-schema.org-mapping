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
 * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
 */
class CostOriginProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/costOrigin';
    const PROPERTY_NAME = 'costOrigin';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
    ];
}
