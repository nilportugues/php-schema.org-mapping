<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to another, somehow related product (or multiple products).
 */
class IsRelatedToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isRelatedTo';
    const PROPERTY_NAME = 'isRelatedTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
