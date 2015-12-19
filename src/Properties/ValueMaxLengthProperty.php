<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies the allowed range for number of characters in a literal value.
 */
class ValueMaxLengthProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/valueMaxLength';
    const PROPERTY_NAME = 'valueMaxLength';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValueSpecification',
    ];
}
