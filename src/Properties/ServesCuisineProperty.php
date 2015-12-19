<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The cuisine of the restaurant.
 */
class ServesCuisineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/servesCuisine';
    const PROPERTY_NAME = 'servesCuisine';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FoodEstablishment',
    ];
}
