<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The object that replaces.
 */
class ReplacerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/replacer';
    const PROPERTY_NAME = 'replacer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ReplaceAction',
    ];
}
