<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date the content expires and is no longer useful or available. Useful for videos.
 */
class ExpiresProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/expires';
    const PROPERTY_NAME = 'expires';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
