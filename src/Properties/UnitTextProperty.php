<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for.
 */
class UnitTextProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/unitText';
    const PROPERTY_NAME = 'unitText';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValue',
        'http://schema.org/QuantitativeValue',
        'http://schema.org/TypeAndQuantityNode',
        'http://schema.org/UnitPriceSpecification',
    ];
}
