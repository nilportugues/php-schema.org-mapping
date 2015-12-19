<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date and time the reservation was modified.
 */
class ModifiedTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/modifiedTime';
    const PROPERTY_NAME = 'modifiedTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
    ];
}
