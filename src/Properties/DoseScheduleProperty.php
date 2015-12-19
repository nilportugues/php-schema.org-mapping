<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A dosing schedule for the drug for a given population, either observed, recommended, or maximum dose based on the type used.
 */
class DoseScheduleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/doseSchedule';
    const PROPERTY_NAME = 'doseSchedule';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
