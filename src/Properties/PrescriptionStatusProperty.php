<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates whether this drug is available by prescription or over-the-counter.
 */
class PrescriptionStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/prescriptionStatus';
    const PROPERTY_NAME = 'prescriptionStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
