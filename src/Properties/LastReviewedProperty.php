<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
 */
class LastReviewedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lastReviewed';
    const PROPERTY_NAME = 'lastReviewed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
