<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The muscle whose action counteracts the specified muscle.
 */
class AntagonistProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/antagonist';
    const PROPERTY_NAME = 'antagonist';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
