<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The height of the item.
 */
class HeightProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/height';
    const PROPERTY_NAME = 'height';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
        'http://schema.org/Product',
        'http://schema.org/Person',
    ];
}
