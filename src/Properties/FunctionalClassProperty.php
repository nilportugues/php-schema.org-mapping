<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The degree of mobility the joint allows.
 */
class FunctionalClassProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/functionalClass';
    const PROPERTY_NAME = 'functionalClass';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Joint',
    ];
}
