<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
 */
class AdvanceBookingRequirementProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/advanceBookingRequirement';
    const PROPERTY_NAME = 'advanceBookingRequirement';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
