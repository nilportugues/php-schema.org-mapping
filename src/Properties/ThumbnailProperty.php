<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Thumbnail image for an image or video.
 */
class ThumbnailProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/thumbnail';
    const PROPERTY_NAME = 'thumbnail';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ImageObject',
        'http://schema.org/VideoObject',
    ];
}
