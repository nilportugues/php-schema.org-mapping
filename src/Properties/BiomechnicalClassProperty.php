<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The biomechanical properties of the bone.
 */
class BiomechnicalClassProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/biomechnicalClass';
    const PROPERTY_NAME = 'biomechnicalClass';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Joint',
    ];
}
