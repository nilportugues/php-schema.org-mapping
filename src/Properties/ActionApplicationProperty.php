<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An application that can complete the request.
 */
class ActionApplicationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/actionApplication';
    const PROPERTY_NAME = 'actionApplication';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EntryPoint',
    ];
}
