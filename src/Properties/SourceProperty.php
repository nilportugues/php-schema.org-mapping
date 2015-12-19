<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The anatomical or organ system that the artery originates from.
 */
class SourceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/source';
    const PROPERTY_NAME = 'source';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Artery',
    ];
}
