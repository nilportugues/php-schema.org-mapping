<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The playlist to which this recording belongs.
 */
class InPlaylistProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/inPlaylist';
    const PROPERTY_NAME = 'inPlaylist';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicRecording',
    ];
}
