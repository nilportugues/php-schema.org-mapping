<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the primary entity described in some page or other CreativeWork.
 */
class MainEntityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mainEntity';
    const PROPERTY_NAME = 'mainEntity';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
