<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Characteristics of the population for which this is intended, or which typically uses it, e.g. 'adults'.
 */
class TargetPopulationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/targetPopulation';
    const PROPERTY_NAME = 'targetPopulation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
        'http://schema.org/DoseSchedule',
    ];
}
