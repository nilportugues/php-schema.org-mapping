<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The participant/person/organization that bought the object.
 */
class BuyerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/buyer';
    const PROPERTY_NAME = 'buyer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SellAction',
    ];
}
