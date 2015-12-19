<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
 */
class ValueReferenceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/valueReference';
    const PROPERTY_NAME = 'valueReference';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
        'http://schema.org/QuantitativeValue',
        'http://schema.org/PropertyValue',
    ];
}
