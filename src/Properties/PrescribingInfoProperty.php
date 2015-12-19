<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Link to prescribing information for the drug.
 */
class PrescribingInfoProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/prescribingInfo';
    const PROPERTY_NAME = 'prescribingInfo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
