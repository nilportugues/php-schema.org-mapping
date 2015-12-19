<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The place or point where a muscle arises.
 */
class OriginProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/origin';
    const PROPERTY_NAME = 'origin';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
