<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The age of the business.
 */
class YearsInOperationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/yearsInOperation';
    const PROPERTY_NAME = 'yearsInOperation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusinessAudience',
    ];
}
