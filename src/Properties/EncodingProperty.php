<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia.
 */
class EncodingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/encoding';
    const PROPERTY_NAME = 'encoding';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
