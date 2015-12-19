<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Fictional person connected with a creative work.
 */
class CharacterProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/character';
    const PROPERTY_NAME = 'character';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
