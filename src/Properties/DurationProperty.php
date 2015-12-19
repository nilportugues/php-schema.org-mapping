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
 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
 */
class DurationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/duration';
    const PROPERTY_NAME = 'duration';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
        'http://schema.org/Event',
        'http://schema.org/Movie',
        'http://schema.org/MusicRecording',
    ];
}
