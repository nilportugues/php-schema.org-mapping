<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The anatomy of the underlying organ system or structures associated with this entity.
 */
class AssociatedAnatomyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/associatedAnatomy';
    const PROPERTY_NAME = 'associatedAnatomy';

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
