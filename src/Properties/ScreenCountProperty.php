<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of screens in the movie theater.
 */
class ScreenCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/screenCount';
    const PROPERTY_NAME = 'screenCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MovieTheater',
    ];
}
