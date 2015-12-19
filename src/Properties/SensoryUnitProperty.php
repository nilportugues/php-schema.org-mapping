<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The neurological pathway extension that inputs and sends information to the brain or spinal cord.
 */
class SensoryUnitProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sensoryUnit';
    const PROPERTY_NAME = 'sensoryUnit';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Nerve',
    ];
}
