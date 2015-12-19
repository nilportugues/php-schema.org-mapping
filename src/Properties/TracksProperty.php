<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A music recording (track)&#x2014;usually a single song.
 */
class TracksProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/tracks';
    const PROPERTY_NAME = 'tracks';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicPlaylist',
        'http://schema.org/MusicGroup',
    ];
}
