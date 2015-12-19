<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A full description of the lodging unit.
 */
class LodgingUnitDescriptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lodgingUnitDescription';
    const PROPERTY_NAME = 'lodgingUnitDescription';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}