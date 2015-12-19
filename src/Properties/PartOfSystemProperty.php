<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The anatomical or organ system that this structure is part of.
 */
class PartOfSystemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfSystem';
    const PROPERTY_NAME = 'partOfSystem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
