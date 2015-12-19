<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies specific carrier(s) requirements for the application (e.g. an application may only work on a specific carrier network).
 */
class CarrierRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/carrierRequirements';
    const PROPERTY_NAME = 'carrierRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MobileApplication',
    ];
}
