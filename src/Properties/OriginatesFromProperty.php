<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The vasculature the lymphatic structure originates, or afferents, from.
 */
class OriginatesFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/originatesFrom';
    const PROPERTY_NAME = 'originatesFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LymphaticVessel',
    ];
}
