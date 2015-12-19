<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Headline of the article.
 */
class HeadlineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/headline';
    const PROPERTY_NAME = 'headline';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
