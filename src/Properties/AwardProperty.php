<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An award won by or for this item.
 */
class AwardProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/award';
    const PROPERTY_NAME = 'award';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Organization',
        'http://schema.org/Person',
        'http://schema.org/Product',
        'http://schema.org/Service',
    ];
}
