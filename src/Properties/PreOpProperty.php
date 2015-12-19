<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A description of the workup, testing, and other preparations required before implanting this device.
 */
class PreOpProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/preOp';
    const PROPERTY_NAME = 'preOp';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalDevice',
    ];
}
