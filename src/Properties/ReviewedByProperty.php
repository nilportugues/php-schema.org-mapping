<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * People or organizations that have reviewed the content on this web page for accuracy and/or completeness.
 */
class ReviewedByProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reviewedBy';
    const PROPERTY_NAME = 'reviewedBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
