<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The release date of a product or product model. This can be used to distinguish the exact variant of a product.
 */
class ReleaseDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/releaseDate';
    const PROPERTY_NAME = 'releaseDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
