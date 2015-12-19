<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date when this media object was uploaded to this site.
 */
class UploadDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/uploadDate';
    const PROPERTY_NAME = 'uploadDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
