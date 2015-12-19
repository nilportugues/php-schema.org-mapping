<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The class of drug this belongs to (e.g., statins).
 */
class DrugClassProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/drugClass';
    const PROPERTY_NAME = 'drugClass';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
