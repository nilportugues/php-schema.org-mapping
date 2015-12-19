<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The depth of the item.
 */
class DepthProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/depth';
    const PROPERTY_NAME = 'depth';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
    ];
}