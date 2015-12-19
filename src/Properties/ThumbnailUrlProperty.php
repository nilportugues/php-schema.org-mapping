<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A thumbnail image relevant to the Thing.
 */
class ThumbnailUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/thumbnailUrl';
    const PROPERTY_NAME = 'thumbnailUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
