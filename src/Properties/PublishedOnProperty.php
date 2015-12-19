<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A broadcast service associated with the publication event.
 */
class PublishedOnProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/publishedOn';
    const PROPERTY_NAME = 'publishedOn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationEvent',
    ];
}
