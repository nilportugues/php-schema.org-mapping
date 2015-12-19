<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date of death.
 */
class DeathDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/deathDate';
    const PROPERTY_NAME = 'deathDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
