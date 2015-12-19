<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Maximal age of the child.
 */
class ChildMaxAgeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/childMaxAge';
    const PROPERTY_NAME = 'childMaxAge';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParentAudience',
    ];
}
