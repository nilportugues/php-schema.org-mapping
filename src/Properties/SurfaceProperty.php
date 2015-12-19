<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * e.g. Canvas, Paper, Wood, Board, etc.
 */
class SurfaceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/surface';
    const PROPERTY_NAME = 'surface';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VisualArtwork',
    ];
}
