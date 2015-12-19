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
 * Runtime platform or script interpreter dependencies (Example - Java v1, Python2.3, .Net Framework 3.0).
 */
class RuntimeProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/runtime';
    const PROPERTY_NAME = 'runtime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
