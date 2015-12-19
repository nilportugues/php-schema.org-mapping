<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This links to a node or nodes indicating the exact quantity of the products included in the offer.
 */
class IncludesObjectProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/includesObject';
    const PROPERTY_NAME = 'includesObject';

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
