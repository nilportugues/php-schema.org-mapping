<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The value of the dose, e.g. 500.
 */
class DoseValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/doseValue';
    const PROPERTY_NAME = 'doseValue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DoseSchedule',
    ];
}
