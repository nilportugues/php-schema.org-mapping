<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of adults staying in the unit.
 */
class NumAdultsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numAdults';
    const PROPERTY_NAME = 'numAdults';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}
