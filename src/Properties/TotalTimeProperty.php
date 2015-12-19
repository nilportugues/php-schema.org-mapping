<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
 */
class TotalTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/totalTime';
    const PROPERTY_NAME = 'totalTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
