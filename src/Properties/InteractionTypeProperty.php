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
 * The Action representing the type of interaction. For up votes, +1s, etc. use LikeAction. For down votes use DislikeAction. Otherwise, use the most specific Action.
 */
class InteractionTypeProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/interactionType';
    const PROPERTY_NAME = 'interactionType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InteractionCounter',
    ];
}
