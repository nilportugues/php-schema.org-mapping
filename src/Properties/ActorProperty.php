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
 * An actor, e.g. in tv, radio, movie, video games etc. Actors can be associated with individual items or with a series, episode, clip.
 */
class ActorProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/actor';
    const PROPERTY_NAME = 'actor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Movie',
        'http://schema.org/VideoObject',
        'http://schema.org/VideoGame',
        'http://schema.org/Episode',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/RadioSeries',
        'http://schema.org/MovieSeries',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/TVSeries',
        'http://schema.org/Clip',
    ];
}
