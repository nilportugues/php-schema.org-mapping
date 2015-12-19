<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Position of the clip within an ordered group of clips.
 */
class ClipNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/clipNumber';
    const PROPERTY_NAME = 'clipNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Clip',
    ];
}
