<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A diagnostic test or procedure offered by this lab.
 */
class AvailableTestProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableTest';
    const PROPERTY_NAME = 'availableTest';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DiagnosticLab',
    ];
}
