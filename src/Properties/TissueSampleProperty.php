<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type of tissue sample required for the test.
 */
class TissueSampleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/tissueSample';
    const PROPERTY_NAME = 'tissueSample';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PathologyTest',
    ];
}
