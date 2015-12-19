<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date and time of obtaining the product.
 */
class OwnedFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ownedFrom';
    const PROPERTY_NAME = 'ownedFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OwnershipInfo',
    ];
}
