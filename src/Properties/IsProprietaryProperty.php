<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * True if this item's name is a proprietary/brand name (vs. generic name).
 */
class IsProprietaryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isProprietary';
    const PROPERTY_NAME = 'isProprietary';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DietarySupplement',
        'http://schema.org/Drug',
    ];
}
