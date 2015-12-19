<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The vasculature the lymphatic structure runs, or efferents, to.
 */
class RunsToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/runsTo';
    const PROPERTY_NAME = 'runsTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LymphaticVessel',
    ];
}
