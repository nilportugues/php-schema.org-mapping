<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to the organization or person making the offer.
 */
class OfferedByProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/offeredBy';
    const PROPERTY_NAME = 'offeredBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
    ];
}
