<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
 */
class DateModifiedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dateModified';
    const PROPERTY_NAME = 'dateModified';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/DataFeedItem',
    ];
}
