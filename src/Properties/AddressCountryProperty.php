<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The country. For example, USA. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 */
class AddressCountryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/addressCountry';
    const PROPERTY_NAME = 'addressCountry';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PostalAddress',
        'http://schema.org/GeoCoordinates',
        'http://schema.org/GeoShape',
    ];
}
