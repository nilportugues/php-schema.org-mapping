<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Minimal age of the child.
 */
class ChildMinAgeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/childMinAge';
    const PROPERTY_NAME = 'childMinAge';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParentAudience',
    ];
}
