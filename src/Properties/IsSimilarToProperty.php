<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to another, functionally similar product (or multiple products).
 */
class IsSimilarToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isSimilarTo';
    const PROPERTY_NAME = 'isSimilarTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
