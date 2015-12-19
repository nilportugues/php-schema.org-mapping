<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The manufacturer of the product.
 */
class ManufacturerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/manufacturer';
    const PROPERTY_NAME = 'manufacturer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
        'http://schema.org/Drug',
        'http://schema.org/Product',
    ];
}
