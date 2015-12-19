<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies the Person who edited the CreativeWork.
 */
class EditorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/editor';
    const PROPERTY_NAME = 'editor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
