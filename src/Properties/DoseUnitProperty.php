<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The unit of the dose, e.g. 'mg'.
 */
class DoseUnitProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/doseUnit';
    const PROPERTY_NAME = 'doseUnit';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DoseSchedule',
    ];
}
