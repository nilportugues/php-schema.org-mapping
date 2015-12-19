<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This ordering relation for qualitative values indicates that the subject is not equal to the object.
 */
class NonEqualProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nonEqual';
    const PROPERTY_NAME = 'nonEqual';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
    ];
}
