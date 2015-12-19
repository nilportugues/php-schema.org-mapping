<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of instrument. The language used on this action.
 */
class LanguageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/language';
    const PROPERTY_NAME = 'language';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CommunicateAction',
        'http://schema.org/WriteAction',
    ];
}
