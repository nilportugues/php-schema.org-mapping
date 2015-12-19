<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Additional content for a software application.
 */
class SoftwareAddOnProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/softwareAddOn';
    const PROPERTY_NAME = 'softwareAddOn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
