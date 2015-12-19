<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The audience eligible for this service.
 */
class ServiceAudienceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceAudience';
    const PROPERTY_NAME = 'serviceAudience';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
    ];
}
