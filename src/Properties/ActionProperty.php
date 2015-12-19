<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The movement the muscle generates.
 */
class ActionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/action';
    const PROPERTY_NAME = 'action';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
