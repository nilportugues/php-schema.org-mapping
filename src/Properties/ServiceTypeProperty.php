<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
 */
class ServiceTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/serviceType';
    const PROPERTY_NAME = 'serviceType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
    ];
}
