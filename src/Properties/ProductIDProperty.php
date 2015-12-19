<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The product identifier, such as ISBN. For example: &lt;meta itemprop='productID' content='isbn:123-456-789'/&gt;.
 */
class ProductIDProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/productID';
    const PROPERTY_NAME = 'productID';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}
