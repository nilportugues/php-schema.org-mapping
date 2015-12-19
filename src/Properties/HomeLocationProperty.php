<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A contact location for a person's residence.
 */
class HomeLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/homeLocation';
    const PROPERTY_NAME = 'homeLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
