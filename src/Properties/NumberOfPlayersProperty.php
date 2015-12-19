<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicate how many people can play this game (minimum, maximum, or range).
 */
class NumberOfPlayersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfPlayers';
    const PROPERTY_NAME = 'numberOfPlayers';

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
