<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The anatomical or organ system that the vein flows into; a larger structure that the vein connects to.
 */
class TributaryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/tributary';
    const PROPERTY_NAME = 'tributary';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vein',
    ];
}
