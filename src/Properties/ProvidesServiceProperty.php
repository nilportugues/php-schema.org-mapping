<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The service provided by this channel.
 */
class ProvidesServiceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/providesService';
    const PROPERTY_NAME = 'providesService';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ServiceChannel',
    ];
}