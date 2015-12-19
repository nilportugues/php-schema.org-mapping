<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The album to which this recording belongs.
 */
class InAlbumProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/inAlbum';
    const PROPERTY_NAME = 'inAlbum';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicRecording',
    ];
}
