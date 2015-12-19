<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The base salary of the job or of an employee in an EmployeeRole.
 */
class BaseSalaryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/baseSalary';
    const PROPERTY_NAME = 'baseSalary';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
        'http://schema.org/EmployeeRole',
    ];
}
