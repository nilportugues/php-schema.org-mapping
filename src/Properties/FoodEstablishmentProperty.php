<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of location. The specific food establishment where the action occurred.
 */
class FoodEstablishmentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/foodEstablishment';
    const PROPERTY_NAME = 'foodEstablishment';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CookAction',
    ];
}
