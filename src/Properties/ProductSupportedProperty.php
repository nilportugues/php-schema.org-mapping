<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The product or service this support contact point is related to (such as product support for a particular product line). This can be a specific product or product line (e.g. "iPhone") or a general category of products or services (e.g. "smartphones").
 */
class ProductSupportedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/productSupported';
    const PROPERTY_NAME = 'productSupported';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ContactPoint',
    ];
}
