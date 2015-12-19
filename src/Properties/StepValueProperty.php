<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The stepValue attribute indicates the granularity that is expected (and required) of the value in a PropertyValueSpecification.
 */
class StepValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/stepValue';
    const PROPERTY_NAME = 'stepValue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValueSpecification',
    ];
}
