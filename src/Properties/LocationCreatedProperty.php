<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
 */
class LocationCreatedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/locationCreated';
    const PROPERTY_NAME = 'locationCreated';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
