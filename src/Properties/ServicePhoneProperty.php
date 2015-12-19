<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The phone number to use to access the service.
 */
class ServicePhoneProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/servicePhone';
    const PROPERTY_NAME = 'servicePhone';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}
