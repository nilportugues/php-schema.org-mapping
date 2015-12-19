<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An item within in a data feed. Data feeds may have many elements.
 */
class DataFeedElementProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dataFeedElement';
    const PROPERTY_NAME = 'dataFeedElement';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DataFeed',
    ];
}
