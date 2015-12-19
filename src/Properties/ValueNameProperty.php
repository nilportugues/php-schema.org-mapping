<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the name of the PropertyValueSpecification to be used in URL templates and form encoding in a manner analogous to HTML's input@name.
 */
class ValueNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/valueName';
    const PROPERTY_NAME = 'valueName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValueSpecification',
    ];
}
