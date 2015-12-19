<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An intended audience, i.e. a group for whom something was created.
 */
class AudienceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/audience';
    const PROPERTY_NAME = 'audience';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Product',
        'http://schema.org/PlayAction',
    ];
}
