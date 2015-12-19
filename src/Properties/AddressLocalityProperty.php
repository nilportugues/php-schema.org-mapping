<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The locality. For example, Mountain View.
 */
class AddressLocalityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/addressLocality';
    const PROPERTY_NAME = 'addressLocality';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PostalAddress',
    ];
}
