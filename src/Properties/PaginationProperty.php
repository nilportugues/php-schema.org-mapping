<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
 */
class PaginationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pagination';
    const PROPERTY_NAME = 'pagination';

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
