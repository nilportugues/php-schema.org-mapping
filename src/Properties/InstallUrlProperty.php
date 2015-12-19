<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * URL at which the app may be installed, if different from the URL of the item.
 */
class InstallUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/installUrl';
    const PROPERTY_NAME = 'installUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
