<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The geographic area where the service is provided.
 */
class ServiceAreaProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceArea';
    const PROPERTY_NAME = 'serviceArea';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
        'http://schema.org/Organization',
        'http://schema.org/ContactPoint',
    ];
}
