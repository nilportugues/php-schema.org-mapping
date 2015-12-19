<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The value of an active ingredient's strength, e.g. 325.
 */
class StrengthValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/strengthValue';
    const PROPERTY_NAME = 'strengthValue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugStrength',
    ];
}
