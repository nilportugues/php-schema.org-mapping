<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An item is an object within the game world that can be collected by a player or, occasionally, a non-player character.
 */
class GameItemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/gameItem';
    const PROPERTY_NAME = 'gameItem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Game',
        'http://schema.org/VideoGameSeries',
    ];
}
