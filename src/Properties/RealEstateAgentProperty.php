<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of participant. The real estate agent involved in the action.
 */
class RealEstateAgentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/realEstateAgent';
    const PROPERTY_NAME = 'realEstateAgent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/RentAction',
    ];
}
