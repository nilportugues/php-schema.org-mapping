<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date of production of the item, e.g. vehicle.
 */
class ProductionDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/productionDate';
    const PROPERTY_NAME = 'productionDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
        'http://schema.org/Product',
    ];
}
