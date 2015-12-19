<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * exif data for this object.
 */
class ExifDataProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/exifData';
    const PROPERTY_NAME = 'exifData';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ImageObject',
    ];
}
