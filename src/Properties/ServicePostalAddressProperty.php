<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The address for accessing the service by mail.
 */
class ServicePostalAddressProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/servicePostalAddress';
    const PROPERTY_NAME = 'servicePostalAddress';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}
