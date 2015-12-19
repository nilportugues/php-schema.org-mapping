<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
 */
class CharacterNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/characterName';
    const PROPERTY_NAME = 'characterName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PerformanceRole',
    ];
}
