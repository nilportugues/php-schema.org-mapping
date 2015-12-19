<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\InteractionServiceProperty interactionService()
 * @method static \NilPortugues\SchemaOrg\Properties\InteractionTypeProperty interactionType()
 * @method static \NilPortugues\SchemaOrg\Properties\UserInteractionCountProperty userInteractionCount()
 * METHODEND.
 *
 * A summary of how users have interacted with this CreativeWork. In most cases, authors will use a subtype to specify the specific type of interaction.
 */
class InteractionCounter extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/InteractionCounter';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'interactionService' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InteractionServiceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InteractionCounter',
        ],
        'interactionType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InteractionTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InteractionCounter',
        ],
        'userInteractionCount' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UserInteractionCountProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InteractionCounter',
        ],
    ];
}
