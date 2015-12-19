<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer from a previous, often discontinued variant of the product to its newer variant.
 */
class PredecessorOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/predecessorOf';
    const PROPERTY_NAME = 'predecessorOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ProductModel',
    ];
}
