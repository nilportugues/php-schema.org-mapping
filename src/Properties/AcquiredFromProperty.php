<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The organization or person from which the product was acquired.
 */
class AcquiredFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/acquiredFrom';
    const PROPERTY_NAME = 'acquiredFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OwnershipInfo',
    ];
}
