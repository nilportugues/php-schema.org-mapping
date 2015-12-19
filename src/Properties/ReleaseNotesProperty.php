<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of what changed in this version.
 */
class ReleaseNotesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/releaseNotes';
    const PROPERTY_NAME = 'releaseNotes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
