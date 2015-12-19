<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates a page (or other CreativeWork) for which this thing is the main entity being described.
 */
class MainEntityOfPageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mainEntityOfPage';
    const PROPERTY_NAME = 'mainEntityOfPage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
