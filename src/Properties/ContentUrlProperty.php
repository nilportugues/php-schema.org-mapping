<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Actual bytes of the media object, for example the image file or video file.
 */
class ContentUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contentUrl';
    const PROPERTY_NAME = 'contentUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
