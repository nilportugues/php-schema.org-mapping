<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Either the actual menu or a URL of the menu.
 */
class MenuProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/menu';
    const PROPERTY_NAME = 'menu';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FoodEstablishment',
    ];
}