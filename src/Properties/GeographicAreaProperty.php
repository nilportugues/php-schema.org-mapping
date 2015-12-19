<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The geographic area associated with the audience.
 */
class GeographicAreaProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/geographicArea';
    const PROPERTY_NAME = 'geographicArea';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Audience',
    ];
}
