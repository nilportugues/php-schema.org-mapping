<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The result produced in the action. e.g. John wrote *a book*.
 */
class ResultProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/result';
    const PROPERTY_NAME = 'result';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}
