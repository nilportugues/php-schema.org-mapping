<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The generic name of this drug or supplement.
 */
class NonProprietaryNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nonProprietaryName';
    const PROPERTY_NAME = 'nonProprietaryName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
        'http://schema.org/Drug',
    ];
}
