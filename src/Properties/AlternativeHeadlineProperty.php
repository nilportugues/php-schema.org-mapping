<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A secondary title of the CreativeWork.
 */
class AlternativeHeadlineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/alternativeHeadline';
    const PROPERTY_NAME = 'alternativeHeadline';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
