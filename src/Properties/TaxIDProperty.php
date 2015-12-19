<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the US or the CIF/NIF in Spain.
 */
class TaxIDProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/taxID';
    const PROPERTY_NAME = 'taxID';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
