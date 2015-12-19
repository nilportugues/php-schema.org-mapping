<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
 */
class ArtworkSurfaceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/artworkSurface';
    const PROPERTY_NAME = 'artworkSurface';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VisualArtwork',
    ];
}
