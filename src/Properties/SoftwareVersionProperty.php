<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Version of the software instance.
 */
class SoftwareVersionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/softwareVersion';
    const PROPERTY_NAME = 'softwareVersion';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
