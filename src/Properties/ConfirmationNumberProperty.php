<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A number that confirms the given order or payment has been received.
 */
class ConfirmationNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/confirmationNumber';
    const PROPERTY_NAME = 'confirmationNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
        'http://schema.org/Invoice',
    ];
}
