<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * File size in (mega/kilo) bytes.
 */
class ContentSizeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contentSize';
    const PROPERTY_NAME = 'contentSize';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
