<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If responding yes, the number of guests who will attend in addition to the invitee.
 */
class AdditionalNumberOfGuestsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/additionalNumberOfGuests';
    const PROPERTY_NAME = 'additionalNumberOfGuests';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RsvpAction',
    ];
}
