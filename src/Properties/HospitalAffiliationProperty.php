<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A hospital with which the physician or office is affiliated.
 */
class HospitalAffiliationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hospitalAffiliation';
    const PROPERTY_NAME = 'hospitalAffiliation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Physician',
    ];
}
