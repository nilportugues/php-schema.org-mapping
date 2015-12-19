<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The bitrate of the media object.
 */
class BitrateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bitrate';
    const PROPERTY_NAME = 'bitrate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
