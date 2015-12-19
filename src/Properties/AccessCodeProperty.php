<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Password, PIN, or access code needed for delivery (e.g. from a locker).
 */
class AccessCodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/accessCode';
    const PROPERTY_NAME = 'accessCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DeliveryEvent',
    ];
}
