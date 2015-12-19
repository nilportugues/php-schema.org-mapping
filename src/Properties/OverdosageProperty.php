<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any information related to overdose on a drug, including signs or symptoms, treatments, contact information for emergency response.
 */
class OverdosageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/overdosage';
    const PROPERTY_NAME = 'overdosage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
