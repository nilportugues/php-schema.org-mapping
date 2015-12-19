<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The caption for this object.
 */
class CaptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/caption';
    const PROPERTY_NAME = 'caption';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ImageObject',
        'http://schema.org/VideoObject',
    ];
}
