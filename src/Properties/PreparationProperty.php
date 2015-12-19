<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Typical preparation that a patient must undergo before having the procedure performed.
 */
class PreparationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/preparation';
    const PROPERTY_NAME = 'preparation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalProcedure',
    ];
}
