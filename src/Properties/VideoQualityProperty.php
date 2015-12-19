<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The quality of the video.
 */
class VideoQualityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/videoQuality';
    const PROPERTY_NAME = 'videoQuality';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoObject',
    ];
}
