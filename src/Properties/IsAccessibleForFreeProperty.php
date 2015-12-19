<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A flag to signal that the publication is accessible for free.
 */
class IsAccessibleForFreeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isAccessibleForFree';
    const PROPERTY_NAME = 'isAccessibleForFree';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationEvent',
    ];
}
