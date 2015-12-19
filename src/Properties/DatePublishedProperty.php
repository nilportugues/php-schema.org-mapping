<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date of first broadcast/publication.
 */
class DatePublishedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/datePublished';
    const PROPERTY_NAME = 'datePublished';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
