<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The organization owning or operating the broadcast service.
 */
class BroadcasterProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/broadcaster';
    const PROPERTY_NAME = 'broadcaster';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BroadcastService',
    ];
}
