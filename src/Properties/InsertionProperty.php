<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The place of attachment of a muscle, or what the muscle moves.
 */
class InsertionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/insertion';
    const PROPERTY_NAME = 'insertion';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
