<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date the item e.g. vehicle was purchased by the current owner.
 */
class PurchaseDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/purchaseDate';
    const PROPERTY_NAME = 'purchaseDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
        'http://schema.org/Product',
    ];
}
