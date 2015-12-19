<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Location in the body of the anatomical structure.
 */
class BodyLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bodyLocation';
    const PROPERTY_NAME = 'bodyLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
