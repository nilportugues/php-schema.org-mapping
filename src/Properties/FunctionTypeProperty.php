<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Function of the anatomical structure.
 */
class FunctionTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/function';
    const PROPERTY_NAME = 'functionType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
