<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An embedded audio object.
 */
class AudioProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/audio';
    const PROPERTY_NAME = 'audio';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
