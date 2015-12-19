<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type/class of the seat.
 */
class SeatingTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seatingType';
    const PROPERTY_NAME = 'seatingType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Seat',
    ];
}
