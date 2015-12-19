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
 * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
 */
class FamilyNameProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/familyName';
    const PROPERTY_NAME = 'familyName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
