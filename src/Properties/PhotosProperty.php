<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Photographs of this place.
 */
class PhotosProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/photos';
    const PROPERTY_NAME = 'photos';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
