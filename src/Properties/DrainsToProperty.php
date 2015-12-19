<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The vasculature that the vein drains into.
 */
class DrainsToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/drainsTo';
    const PROPERTY_NAME = 'drainsTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vein',
    ];
}
