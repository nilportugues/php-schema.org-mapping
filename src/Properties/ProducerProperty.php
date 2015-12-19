<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
 */
class ProducerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/producer';
    const PROPERTY_NAME = 'producer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
