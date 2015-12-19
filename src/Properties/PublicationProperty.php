<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A publication event associated with the item.
 */
class PublicationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/publication';
    const PROPERTY_NAME = 'publication';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
