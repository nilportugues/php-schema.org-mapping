<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The earliest someone may check into a lodging establishment.
 */
class CheckinTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/checkinTime';
    const PROPERTY_NAME = 'checkinTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}
