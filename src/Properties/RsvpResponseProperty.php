<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The response (yes, no, maybe) to the RSVP.
 */
class RsvpResponseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/rsvpResponse';
    const PROPERTY_NAME = 'rsvpResponse';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RsvpAction',
    ];
}
