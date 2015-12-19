<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The upper value of some characteristic or property.
 */
class MaxValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/maxValue';
    const PROPERTY_NAME = 'maxValue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QuantitativeValue',
        'http://schema.org/PropertyValue',
        'http://schema.org/PropertyValueSpecification',
    ];
}
