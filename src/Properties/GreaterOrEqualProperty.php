<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
 */
class GreaterOrEqualProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/greaterOrEqual';
    const PROPERTY_NAME = 'greaterOrEqual';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
    ];
}
