<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Type of employment (e.g. full-time, part-time, contract, temporary, seasonal, internship).
 */
class EmploymentTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/employmentType';
    const PROPERTY_NAME = 'employmentType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
