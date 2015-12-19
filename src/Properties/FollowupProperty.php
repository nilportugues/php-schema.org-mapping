<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Typical or recommended followup care after the procedure is performed.
 */
class FollowupProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/followup';
    const PROPERTY_NAME = 'followup';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalProcedure',
    ];
}
