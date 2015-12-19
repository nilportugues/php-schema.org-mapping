<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to a base product from which this product is a variant. It is safe to infer that the variant inherits all product features from the base model, unless defined locally. This is not transitive.
 */
class IsVariantOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isVariantOf';
    const PROPERTY_NAME = 'isVariantOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ProductModel',
    ];
}
