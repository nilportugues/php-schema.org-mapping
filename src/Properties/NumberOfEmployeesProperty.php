<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of employees in an organization e.g. business.
 */
class NumberOfEmployeesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfEmployees';
    const PROPERTY_NAME = 'numberOfEmployees';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusinessAudience',
        'http://schema.org/Organization',
    ];
}
