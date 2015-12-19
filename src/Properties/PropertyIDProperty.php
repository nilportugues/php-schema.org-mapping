<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A commonly used identifier for the characteristic represented by the property, e.g. a manufacturer or a standard code for a property. propertyID can be.
 */
class PropertyIDProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/propertyID';
    const PROPERTY_NAME = 'propertyID';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValue',
    ];
}
