<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Links to tips, tactics, etc.
 */
class GameTipProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/gameTip';
    const PROPERTY_NAME = 'gameTip';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoGame',
    ];
}
