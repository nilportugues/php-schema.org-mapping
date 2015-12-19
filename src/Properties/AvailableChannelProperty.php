<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
 */
class AvailableChannelProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableChannel';
    const PROPERTY_NAME = 'availableChannel';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
    ];
}
