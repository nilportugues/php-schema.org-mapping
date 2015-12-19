<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The publisher of the creative work.
 */
class PublisherProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/publisher';
    const PROPERTY_NAME = 'publisher';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
