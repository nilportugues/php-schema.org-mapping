<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
 */
class ArtformProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/artform';
    const PROPERTY_NAME = 'artform';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VisualArtwork',
    ];
}
