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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\InteractionServiceProperty;
use NilPortugues\SchemaOrg\Properties\InteractionTypeProperty;
use NilPortugues\SchemaOrg\Properties\UserInteractionCountProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes InteractionCounter.
 */
class InteractionCounter extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/InteractionCounter';

    /**
     * @return Mapping
     */
    public static function interactionService()
    {
        return InteractionServiceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function interactionType()
    {
        return InteractionTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function userInteractionCount()
    {
        return UserInteractionCountProperty::create(self::schemaUrl());
    }
}
