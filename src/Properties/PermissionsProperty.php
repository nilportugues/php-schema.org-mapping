<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Permission(s) required to run the app (for example, a mobile app may require full internet access or may run only on wifi).
 */
class PermissionsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/permissions';
    const PROPERTY_NAME = 'permissions';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
