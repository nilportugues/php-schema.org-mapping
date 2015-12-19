<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If applicable, a description of the pathophysiology associated with the anatomical system, including potential abnormal changes in the mechanical, physical, and biochemical functions of the system.
 */
class AssociatedPathophysiologyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/associatedPathophysiology';
    const PROPERTY_NAME = 'associatedPathophysiology';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
        'http://schema.org/AnatomicalSystem',
        'http://schema.org/SuperficialAnatomy',
    ];
}
