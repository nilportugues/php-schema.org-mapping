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

use NilPortugues\SchemaOrg\Property;

/**
 * This property is deprecated, alongside the UserInteraction types on which it depended.
 */
class InteractionCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/interactionCount';
    const PROPERTY_NAME = 'interactionCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [

    ];
}
