<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The server on which  it is possible to play the game.
 */
class GameServerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/gameServer';
    const PROPERTY_NAME = 'gameServer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoGame',
    ];
}
