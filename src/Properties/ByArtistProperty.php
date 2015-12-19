<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The artist that performed this album or recording.
 */
class ByArtistProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/byArtist';
    const PROPERTY_NAME = 'byArtist';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicAlbum',
        'http://schema.org/MusicRecording',
    ];
}
