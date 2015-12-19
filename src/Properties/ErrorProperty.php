<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * For failed actions, more information on the cause of the failure.
 */
class ErrorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/error';
    const PROPERTY_NAME = 'error';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}
