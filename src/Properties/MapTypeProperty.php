<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the kind of Map, from the MapCategoryType Enumeration.
 */
class MapTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mapType';
    const PROPERTY_NAME = 'mapType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Map',
    ];
}
