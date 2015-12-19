<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Textual description of the unit type (including suite vs. room, size of bed, etc.).
 */
class LodgingUnitTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lodgingUnitType';
    const PROPERTY_NAME = 'lodgingUnitType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}
