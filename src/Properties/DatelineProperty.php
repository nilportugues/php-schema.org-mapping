<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location where the NewsArticle was produced.
 */
class DatelineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dateline';
    const PROPERTY_NAME = 'dateline';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NewsArticle',
    ];
}
