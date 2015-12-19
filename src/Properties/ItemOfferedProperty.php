<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The item being offered.
 */
class ItemOfferedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/itemOffered';
    const PROPERTY_NAME = 'itemOffered';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
