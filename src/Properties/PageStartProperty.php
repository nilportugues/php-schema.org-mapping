<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The page on which the work starts; for example "135" or "xiii".
 */
class PageStartProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pageStart';
    const PROPERTY_NAME = 'pageStart';

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
