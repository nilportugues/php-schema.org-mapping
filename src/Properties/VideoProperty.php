<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An embedded video object.
 */
class VideoProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/video';
    const PROPERTY_NAME = 'video';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
