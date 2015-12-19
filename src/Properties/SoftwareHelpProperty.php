<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Software application help.
 */
class SoftwareHelpProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/softwareHelp';
    const PROPERTY_NAME = 'softwareHelp';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
