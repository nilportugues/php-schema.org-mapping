<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The current approximate inventory level for the item or items.
 */
class InventoryLevelProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/inventoryLevel';
    const PROPERTY_NAME = 'inventoryLevel';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
        'http://schema.org/SomeProducts',
    ];
}
