<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Someone working for this organization.
 */
class EmployeeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/employee';
    const PROPERTY_NAME = 'employee';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
