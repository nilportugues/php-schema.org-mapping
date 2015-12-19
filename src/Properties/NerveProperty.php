<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The underlying innervation associated with the muscle.
 */
class NerveProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nerve';
    const PROPERTY_NAME = 'nerve';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
