<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date the ticket was issued.
 */
class DateIssuedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dateIssued';
    const PROPERTY_NAME = 'dateIssued';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Ticket',
    ];
}
