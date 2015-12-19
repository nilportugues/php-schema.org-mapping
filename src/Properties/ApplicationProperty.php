<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An application that can complete the request.
 */
class ApplicationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/application';
    const PROPERTY_NAME = 'application';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EntryPoint',
    ];
}
