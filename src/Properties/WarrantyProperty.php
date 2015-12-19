<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The warranty promise(s) included in the offer.
 */
class WarrantyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/warranty';
    const PROPERTY_NAME = 'warranty';

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
