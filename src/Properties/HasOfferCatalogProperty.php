<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates an OfferCatalog listing for this Organization, Person, or Service.
 */
class HasOfferCatalogProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hasOfferCatalog';
    const PROPERTY_NAME = 'hasOfferCatalog';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
        'http://schema.org/Service',
    ];
}