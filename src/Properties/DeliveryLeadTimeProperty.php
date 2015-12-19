<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The typical delay between the receipt of the order and the goods leaving the warehouse.
 */
class DeliveryLeadTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/deliveryLeadTime';
    const PROPERTY_NAME = 'deliveryLeadTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
