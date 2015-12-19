<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Number of players on the server.
 */
class PlayersOnlineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/playersOnline';
    const PROPERTY_NAME = 'playersOnline';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GameServer',
    ];
}
