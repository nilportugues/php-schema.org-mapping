<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date and time of giving up ownership on the product.
 */
class OwnedThroughProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ownedThrough';
    const PROPERTY_NAME = 'ownedThrough';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OwnershipInfo',
    ];
}
