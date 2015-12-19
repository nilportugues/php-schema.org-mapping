<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The product that this structured value is referring to.
 */
class TypeOfGoodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/typeOfGood';
    const PROPERTY_NAME = 'typeOfGood';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OwnershipInfo',
        'http://schema.org/TypeAndQuantityNode',
    ];
}
