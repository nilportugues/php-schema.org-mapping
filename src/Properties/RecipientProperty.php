<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The participant who is at the receiving end of the action.
 */
class RecipientProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recipient';
    const PROPERTY_NAME = 'recipient';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CommunicateAction',
        'http://schema.org/AuthorizeAction',
        'http://schema.org/DonateAction',
        'http://schema.org/GiveAction',
        'http://schema.org/PayAction',
        'http://schema.org/ReturnAction',
        'http://schema.org/SendAction',
        'http://schema.org/TipAction',
    ];
}
