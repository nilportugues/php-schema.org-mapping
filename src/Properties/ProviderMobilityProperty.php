<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
 */
class ProviderMobilityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/providerMobility';
    const PROPERTY_NAME = 'providerMobility';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
    ];
}
