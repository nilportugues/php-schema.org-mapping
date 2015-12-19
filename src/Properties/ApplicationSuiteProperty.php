<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
 */
class ApplicationSuiteProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/applicationSuite';
    const PROPERTY_NAME = 'applicationSuite';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
