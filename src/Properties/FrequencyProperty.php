<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * How often the dose is taken, e.g. 'daily'.
 */
class FrequencyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/frequency';
    const PROPERTY_NAME = 'frequency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DoseSchedule',
    ];
}
