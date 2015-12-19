<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The website to access the service.
 */
class ServiceUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceUrl';
    const PROPERTY_NAME = 'serviceUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}
