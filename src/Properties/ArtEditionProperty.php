<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a limited edition of 20 prints, 'artEdition' refers to the total number of copies (in this example "20").
 */
class ArtEditionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/artEdition';
    const PROPERTY_NAME = 'artEdition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VisualArtwork',
    ];
}
