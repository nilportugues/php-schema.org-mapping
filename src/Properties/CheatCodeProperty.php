<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Cheat codes to the game.
 */
class CheatCodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cheatCode';
    const PROPERTY_NAME = 'cheatCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoGame',
        'http://schema.org/VideoGameSeries',
    ];
}
