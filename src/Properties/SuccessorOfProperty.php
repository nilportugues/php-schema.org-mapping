<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer from a newer variant of a product  to its previous, often discontinued predecessor.
 */
class SuccessorOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/successorOf';
    const PROPERTY_NAME = 'successorOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ProductModel',
    ];
}
