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
 * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
 */
class HonorificPrefixProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/honorificPrefix';
    const PROPERTY_NAME = 'honorificPrefix';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
