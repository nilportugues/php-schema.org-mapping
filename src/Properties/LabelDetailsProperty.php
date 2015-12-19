<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Link to the drug's label details.
 */
class LabelDetailsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/labelDetails';
    const PROPERTY_NAME = 'labelDetails';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
