<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
 */
class KeywordsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/keywords';
    const PROPERTY_NAME = 'keywords';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
