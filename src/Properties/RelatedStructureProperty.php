<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Related anatomical structure(s) that are not part of the system but relate or connect to it, such as vascular bundles associated with an organ system.
 */
class RelatedStructureProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedStructure';
    const PROPERTY_NAME = 'relatedStructure';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalSystem',
    ];
}
