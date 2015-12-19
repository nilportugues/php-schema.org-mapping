<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * People working for this organization.
 */
class EmployeesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/employees';
    const PROPERTY_NAME = 'employees';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
