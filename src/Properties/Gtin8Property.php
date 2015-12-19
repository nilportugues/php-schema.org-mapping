<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The GTIN-8 code of the product, or the product to which the offer refers. This code is also known as EAN/UCC-8 or 8-digit EAN. See GS1 GTIN Summary for more details.
 */
class Gtin8Property extends Property
{
    const SCHEMA_URL = 'http://schema.org/gtin8';
    const PROPERTY_NAME = 'gtin8';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Product',
        'http://schema.org/Demand',
    ];
}
