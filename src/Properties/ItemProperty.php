<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
 */
class ItemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/item';
    const PROPERTY_NAME = 'item';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ListItem',
        'http://schema.org/DataFeedItem',
    ];
}
