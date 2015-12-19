<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The width of the item.
 */
class WidthProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/width';
    const PROPERTY_NAME = 'width';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
        'http://schema.org/Product',
    ];
}
