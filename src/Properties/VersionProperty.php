<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The version of the CreativeWork embodied by a specified resource.
 */
class VersionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/version';
    const PROPERTY_NAME = 'version';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
