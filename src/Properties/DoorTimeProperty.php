<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time admission will commence.
 */
class DoorTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/doorTime';
    const PROPERTY_NAME = 'doorTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
