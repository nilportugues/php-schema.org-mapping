<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The winner of the action.
 */
class WinnerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/winner';
    const PROPERTY_NAME = 'winner';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LoseAction',
    ];
}
