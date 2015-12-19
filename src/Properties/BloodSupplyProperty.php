<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The blood vessel that carries blood from the heart to the muscle.
 */
class BloodSupplyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bloodSupply';
    const PROPERTY_NAME = 'bloodSupply';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Muscle',
    ];
}
