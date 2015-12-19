<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of tracks in this album or playlist.
 */
class NumTracksProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numTracks';
    const PROPERTY_NAME = 'numTracks';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicPlaylist',
    ];
}
