<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical service available from this provider.
 */
class AvailableServiceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableService';
    const PROPERTY_NAME = 'availableService';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Hospital',
        'http://schema.org/MedicalClinic',
        'http://schema.org/Physician',
    ];
}
