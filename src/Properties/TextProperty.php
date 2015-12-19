<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The textual content of this CreativeWork.
 */
class TextProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/text';
    const PROPERTY_NAME = 'text';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
