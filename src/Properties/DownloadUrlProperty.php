<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If the file can be downloaded, URL to download the binary.
 */
class DownloadUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/downloadUrl';
    const PROPERTY_NAME = 'downloadUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
