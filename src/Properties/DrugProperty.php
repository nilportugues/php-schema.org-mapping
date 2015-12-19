<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A drug in this drug class.
 */
class DrugProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/drug';
    const PROPERTY_NAME = 'drug';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugClass',
    ];
}
