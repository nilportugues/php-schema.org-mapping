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
 * An episode of a TV/radio series or season.
 */
class EpisodesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/episodes';
    const PROPERTY_NAME = 'episodes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/RadioSeries',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/TVSeries',
    ];
}
