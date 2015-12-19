<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location depicted or described in the content. For example, the location in a photograph or painting.
 */
class ContentLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contentLocation';
    const PROPERTY_NAME = 'contentLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
