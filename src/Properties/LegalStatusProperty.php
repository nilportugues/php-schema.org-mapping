<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The drug or supplement's legal status, including any controlled substance schedules that apply.
 */
class LegalStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/legalStatus';
    const PROPERTY_NAME = 'legalStatus';

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
