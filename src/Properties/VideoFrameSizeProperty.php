<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The frame size of the video.
 */
class VideoFrameSizeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/videoFrameSize';
    const PROPERTY_NAME = 'videoFrameSize';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoObject',
    ];
}
