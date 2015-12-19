<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Video game which is played on this server.
 */
class GameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/game';
    const PROPERTY_NAME = 'game';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/GameServer',
    ];
}
