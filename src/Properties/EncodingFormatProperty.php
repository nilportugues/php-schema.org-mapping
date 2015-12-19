<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * mp3, mpeg4, etc.
 */
class EncodingFormatProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/encodingFormat';
    const PROPERTY_NAME = 'encodingFormat';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
