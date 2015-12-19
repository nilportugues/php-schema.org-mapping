<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name given to how bone physically connects to each other.
 */
class StructuralClassProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/structuralClass';
    const PROPERTY_NAME = 'structuralClass';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Joint',
    ];
}
