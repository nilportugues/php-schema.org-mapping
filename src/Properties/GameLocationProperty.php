<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Real or fictional location of the game (or part of game).
 */
class GameLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/gameLocation';
    const PROPERTY_NAME = 'gameLocation';

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
