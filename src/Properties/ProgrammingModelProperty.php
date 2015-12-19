<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates whether API is managed or unmanaged.
 */
class ProgrammingModelProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/programmingModel';
    const PROPERTY_NAME = 'programmingModel';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/APIReference',
    ];
}
