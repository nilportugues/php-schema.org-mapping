<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The area within which users can expect to reach the broadcast service.
 */
class AreaProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/area';
    const PROPERTY_NAME = 'area';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BroadcastService',
    ];
}
