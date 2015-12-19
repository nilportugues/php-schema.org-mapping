<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The specific biochemical interaction through which this drug or supplement produces its pharmacological effect.
 */
class MechanismOfActionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mechanismOfAction';
    const PROPERTY_NAME = 'mechanismOfAction';

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
