<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A data catalog contained in the dataset.
 */
class IncludedDataCatalogProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/includedDataCatalog';
    const PROPERTY_NAME = 'includedDataCatalog';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Dataset',
    ];
}
