<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This ordering relation for qualitative values indicates that the subject is greater than the object.
 */
class GreaterProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/greater';
    const PROPERTY_NAME = 'greater';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
    ];
}
