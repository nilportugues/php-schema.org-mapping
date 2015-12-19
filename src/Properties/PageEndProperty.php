<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The page on which the work ends; for example "138" or "xvi".
 */
class PageEndProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pageEnd';
    const PROPERTY_NAME = 'pageEnd';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationVolume',
        'http://schema.org/PublicationIssue',
        'http://schema.org/Article',
    ];
}
