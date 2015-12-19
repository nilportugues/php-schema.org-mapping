<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The loser of the action.
 */
class LoserProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/loser';
    const PROPERTY_NAME = 'loser';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WinAction',
    ];
}
