<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A pointer to products or services sought by the organization or person (demand).
 */
class SeeksProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seeks';
    const PROPERTY_NAME = 'seeks';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
