<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The high level platform(s) where the Action can be performed for the given URL. To specify a specific application or operating system instance, use actionApplication.
 */
class ActionPlatformProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/actionPlatform';
    const PROPERTY_NAME = 'actionPlatform';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EntryPoint',
    ];
}
