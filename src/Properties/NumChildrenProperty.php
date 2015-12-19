<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of children staying in the unit.
 */
class NumChildrenProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numChildren';
    const PROPERTY_NAME = 'numChildren';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}
