<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Status of a game server.
 */
class ServerStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serverStatus';
    const PROPERTY_NAME = 'serverStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GameServer',
    ];
}
