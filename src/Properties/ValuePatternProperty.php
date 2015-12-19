<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies a regular expression for testing literal values according to the HTML spec.
 */
class ValuePatternProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/valuePattern';
    const PROPERTY_NAME = 'valuePattern';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValueSpecification',
    ];
}
