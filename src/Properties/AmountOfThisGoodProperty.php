<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The quantity of the goods included in the offer.
 */
class AmountOfThisGoodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/amountOfThisGood';
    const PROPERTY_NAME = 'amountOfThisGood';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TypeAndQuantityNode',
    ];
}
