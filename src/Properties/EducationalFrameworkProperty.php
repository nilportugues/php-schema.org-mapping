<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The framework to which the resource being described is aligned.
 */
class EducationalFrameworkProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/educationalFramework';
    const PROPERTY_NAME = 'educationalFramework';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AlignmentObject',
    ];
}
