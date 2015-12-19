<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time when the live blog will begin covering the Event. Note that coverage may begin before the Event's start time. The LiveBlogPosting may also be created before coverage begins.
 */
class CoverageStartTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/coverageStartTime';
    const PROPERTY_NAME = 'coverageStartTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LiveBlogPosting',
    ];
}