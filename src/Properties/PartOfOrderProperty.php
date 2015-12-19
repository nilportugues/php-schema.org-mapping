<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The overall order the items in this delivery were included in.
 */
class PartOfOrderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfOrder';
    const PROPERTY_NAME = 'partOfOrder';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
