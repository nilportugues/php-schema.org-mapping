<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A photograph of this place.
 */
class PhotoProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/photo';
    const PROPERTY_NAME = 'photo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
