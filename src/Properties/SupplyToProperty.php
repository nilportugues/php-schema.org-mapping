<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The area to which the artery supplies blood.
 */
class SupplyToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/supplyTo';
    const PROPERTY_NAME = 'supplyTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Artery',
    ];
}
