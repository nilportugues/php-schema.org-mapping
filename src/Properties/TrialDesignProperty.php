<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifics about the trial design (enumerated).
 */
class TrialDesignProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/trialDesign';
    const PROPERTY_NAME = 'trialDesign';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTrial',
    ];
}
