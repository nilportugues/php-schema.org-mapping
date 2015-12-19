<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates a CreativeWork that this CreativeWork is (in some sense) part of.
 */
class IsPartOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isPartOf';
    const PROPERTY_NAME = 'isPartOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
