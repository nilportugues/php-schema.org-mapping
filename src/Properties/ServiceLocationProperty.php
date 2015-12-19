<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
 */
class ServiceLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceLocation';
    const PROPERTY_NAME = 'serviceLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}
