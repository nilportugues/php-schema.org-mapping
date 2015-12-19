<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The lower value of some characteristic or property.
 */
class MinValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/minValue';
    const PROPERTY_NAME = 'minValue';

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
