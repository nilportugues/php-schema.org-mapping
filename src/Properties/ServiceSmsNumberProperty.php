<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number to access the service by text message.
 */
class ServiceSmsNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceSmsNumber';
    const PROPERTY_NAME = 'serviceSmsNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}
