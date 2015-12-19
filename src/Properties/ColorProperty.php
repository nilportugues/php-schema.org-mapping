<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The color of the product.
 */
class ColorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/color';
    const PROPERTY_NAME = 'color';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
