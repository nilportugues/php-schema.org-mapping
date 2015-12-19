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
 * The number of employees in an organization e.g. business.
 */
class NumberOfEmployeesProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/numberOfEmployees';
    const PROPERTY_NAME = 'numberOfEmployees';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusinessAudience',
        'http://schema.org/Organization',
    ];
}
