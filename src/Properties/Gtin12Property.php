<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The GTIN-12 code of the product, or the product to which the offer refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix, Item Reference, and Check Digit used to identify trade items. See GS1 GTIN Summary for more details.
 */
class Gtin12Property extends Property
{
    const SCHEMA_URL = 'http://schema.org/gtin12';
    const PROPERTY_NAME = 'gtin12';

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
