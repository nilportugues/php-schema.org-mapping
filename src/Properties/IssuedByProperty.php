<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The organization issuing the ticket or permit.
 */
class IssuedByProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/issuedBy';
    const PROPERTY_NAME = 'issuedBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Ticket',
        'http://schema.org/Permit',
    ];
}
