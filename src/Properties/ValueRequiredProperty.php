<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Whether the property must be filled in to complete the action.  Default is false.
 */
class ValueRequiredProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/valueRequired';
    const PROPERTY_NAME = 'valueRequired';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValueSpecification',
    ];
}
