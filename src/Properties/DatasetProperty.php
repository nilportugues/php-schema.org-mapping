<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A dataset contained in a catalog.
 */
class DatasetProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dataset';
    const PROPERTY_NAME = 'dataset';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DataCatalog',
    ];
}
