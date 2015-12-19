<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
 */
class TranscriptProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/transcript';
    const PROPERTY_NAME = 'transcript';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AudioObject',
        'http://schema.org/VideoObject',
    ];
}
