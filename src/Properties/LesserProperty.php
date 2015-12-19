<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This ordering relation for qualitative values indicates that the subject is lesser than the object.
 */
class LesserProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lesser';
    const PROPERTY_NAME = 'lesser';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
    ];
}
