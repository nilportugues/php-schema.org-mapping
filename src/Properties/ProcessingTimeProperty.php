<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Estimated processing time for the service using this channel.
 */
class ProcessingTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/processingTime';
    const PROPERTY_NAME = 'processingTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}
