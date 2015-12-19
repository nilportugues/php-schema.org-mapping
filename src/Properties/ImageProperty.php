<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An image of the item. This can be a URL or a fully described ImageObject.
 */
class ImageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/image';
    const PROPERTY_NAME = 'image';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
