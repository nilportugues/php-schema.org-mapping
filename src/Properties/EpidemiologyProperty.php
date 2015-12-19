<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The characteristics of associated patients, such as age, gender, race etc.
 */
class EpidemiologyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/epidemiology';
    const PROPERTY_NAME = 'epidemiology';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PhysicalActivity',
        'http://schema.org/MedicalCondition',
    ];
}
