<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An image containing a diagram that illustrates the structure and/or its component substructures and/or connections with other structures.
 */
class DiagramProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/diagram';
    const PROPERTY_NAME = 'diagram';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
