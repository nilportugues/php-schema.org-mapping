<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The person/organization being supported.
 */
class EndorseeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/endorsee';
    const PROPERTY_NAME = 'endorsee';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EndorseAction',
    ];
}
