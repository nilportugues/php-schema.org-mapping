<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Sponsor of the study.
 */
class SponsorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sponsor';
    const PROPERTY_NAME = 'sponsor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
