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
 * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
 */
class GivenNameProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/givenName';
    const PROPERTY_NAME = 'givenName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
