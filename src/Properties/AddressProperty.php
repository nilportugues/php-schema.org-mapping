<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Physical address of the item.
 */
class AddressProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/address';
    const PROPERTY_NAME = 'address';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/Person',
        'http://schema.org/GeoCoordinates',
        'http://schema.org/GeoShape',
    ];
}
