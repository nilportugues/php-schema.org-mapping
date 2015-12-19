<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The value of the quantitative value or property value node. For QuantitativeValue, the recommended type for values is 'Number'. For PropertyValue, it can be 'Text;', 'Number', 'Boolean', or 'StructuredValue'.
 */
class ValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/value';
    const PROPERTY_NAME = 'value';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QuantitativeValue',
        'http://schema.org/PropertyValue',
    ];
}
