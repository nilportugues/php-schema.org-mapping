<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates whether this image is representative of the content of the page.
 */
class RepresentativeOfPageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/representativeOfPage';
    const PROPERTY_NAME = 'representativeOfPage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ImageObject',
    ];
}
