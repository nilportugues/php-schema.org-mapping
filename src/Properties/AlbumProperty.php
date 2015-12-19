<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A music album.
 */
class AlbumProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/album';
    const PROPERTY_NAME = 'album';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicGroup',
    ];
}
