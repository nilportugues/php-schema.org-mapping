<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A dosage form in which this drug/supplement is available, e.g. 'tablet', 'suspension', 'injection'.
 */
class DosageFormProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dosageForm';
    const PROPERTY_NAME = 'dosageForm';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
        'http://schema.org/Drug',
    ];
}
