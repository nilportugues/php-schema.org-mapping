<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The typical working hours for this job (e.g. 1st shift, night shift, 8am-5pm).
 */
class WorkHoursProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workHours';
    const PROPERTY_NAME = 'workHours';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
