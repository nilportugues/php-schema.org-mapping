<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The object that is being replaced.
 */
class ReplaceeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/replacee';
    const PROPERTY_NAME = 'replacee';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ReplaceAction',
    ];
}
