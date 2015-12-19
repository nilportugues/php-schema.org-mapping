<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to start. For actions that span a period of time, when the action was performed. e.g. John wrote a book from *January* to December.
 */
class StartTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/startTime';
    const PROPERTY_NAME = 'startTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
        'http://schema.org/FoodEstablishmentReservation',
    ];
}
