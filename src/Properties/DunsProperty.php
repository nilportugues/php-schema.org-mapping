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
 * The Dun & Bradstreet DUNS number for identifying an organization or business person.
 */
class DunsProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/duns';
    const PROPERTY_NAME = 'duns';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
