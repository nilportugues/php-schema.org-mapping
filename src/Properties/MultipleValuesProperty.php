<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Whether multiple values are allowed for the property.  Default is false.
 */
class MultipleValuesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/multipleValues';
    const PROPERTY_NAME = 'multipleValues';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValueSpecification',
    ];
}
