<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any characteristics of the population used in the study, e.g. 'males under 65'.
 */
class PopulationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/population';
    const PROPERTY_NAME = 'population';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
