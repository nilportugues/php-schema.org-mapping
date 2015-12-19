<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The units of an active ingredient's strength, e.g. mg.
 */
class StrengthUnitProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/strengthUnit';
    const PROPERTY_NAME = 'strengthUnit';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugStrength',
    ];
}
