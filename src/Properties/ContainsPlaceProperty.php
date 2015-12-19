<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The basic containment relation between a place and another that it contains.
 */
class ContainsPlaceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/containsPlace';
    const PROPERTY_NAME = 'containsPlace';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
