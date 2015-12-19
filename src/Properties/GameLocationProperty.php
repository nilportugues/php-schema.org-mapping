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
 * Real or fictional location of the game (or part of game).
 */
class GameLocationProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/gameLocation';
    const PROPERTY_NAME = 'gameLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Game',
        'http://schema.org/VideoGameSeries',
    ];
}
