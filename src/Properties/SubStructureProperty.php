<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Component (sub-)structure(s) that comprise this anatomical structure.
 */
class SubStructureProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subStructure';
    const PROPERTY_NAME = 'subStructure';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
