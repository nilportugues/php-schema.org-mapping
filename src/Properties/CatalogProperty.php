<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A data catalog which contains a dataset.
 */
class CatalogProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/catalog';
    const PROPERTY_NAME = 'catalog';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Dataset',
    ];
}
