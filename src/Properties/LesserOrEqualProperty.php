<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This ordering relation for qualitative values indicates that the subject is lesser than or equal to the object.
 */
class LesserOrEqualProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lesserOrEqual';
    const PROPERTY_NAME = 'lesserOrEqual';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
    ];
}
