<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The underlying anatomical structures, such as organs, that comprise the anatomical system.
 */
class ComprisedOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/comprisedOf';
    const PROPERTY_NAME = 'comprisedOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalSystem',
    ];
}
