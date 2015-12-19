<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
 */
class CitationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/citation';
    const PROPERTY_NAME = 'citation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
