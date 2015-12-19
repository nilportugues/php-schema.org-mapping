<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The CreativeWork encoded by this media object.
 */
class EncodesCreativeWorkProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/encodesCreativeWork';
    const PROPERTY_NAME = 'encodesCreativeWork';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
