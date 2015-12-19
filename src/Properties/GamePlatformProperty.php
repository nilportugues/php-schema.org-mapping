<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The electronic systems used to play video games.
 */
class GamePlatformProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/gamePlatform';
    const PROPERTY_NAME = 'gamePlatform';

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
