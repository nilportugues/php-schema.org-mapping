<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * URL of the item.
 */
class UrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/url';
    const PROPERTY_NAME = 'url';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
