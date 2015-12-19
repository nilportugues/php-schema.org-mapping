<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * One of the domain specialities to which this web page's content applies.
 */
class SpecialtyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/specialty';
    const PROPERTY_NAME = 'specialty';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
