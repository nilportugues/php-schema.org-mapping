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
 * An Offer which must be accepted before the user can perform the Action. For example, the user may need to buy a movie before being able to watch it.
 */
class ExpectsAcceptanceOfProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/expectsAcceptanceOf';
    const PROPERTY_NAME = 'expectsAcceptanceOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ConsumeAction',
    ];
}
