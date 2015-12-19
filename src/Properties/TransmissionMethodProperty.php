<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * How the disease spreads, either as a route or vector, for example 'direct contact', 'Aedes aegypti', etc.
 */
class TransmissionMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/transmissionMethod';
    const PROPERTY_NAME = 'transmissionMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InfectiousDisease',
    ];
}
