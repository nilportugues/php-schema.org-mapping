<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The datetime the item was removed from the DataFeed.
 */
class DateDeletedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dateDeleted';
    const PROPERTY_NAME = 'dateDeleted';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DataFeedItem',
    ];
}
