<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of instrument. The query used on this action.
 */
class QueryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/query';
    const PROPERTY_NAME = 'query';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SearchAction',
    ];
}
