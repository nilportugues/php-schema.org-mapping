<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A collection of music albums.
 */
class AlbumsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/albums';
    const PROPERTY_NAME = 'albums';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MusicGroup',
    ];
}
