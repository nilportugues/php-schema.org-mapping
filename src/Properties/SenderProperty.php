<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The participant who is at the sending end of the action.
 */
class SenderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sender';
    const PROPERTY_NAME = 'sender';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ReceiveAction',
    ];
}
