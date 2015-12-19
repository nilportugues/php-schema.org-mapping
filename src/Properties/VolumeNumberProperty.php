<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
 */
class VolumeNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/volumeNumber';
    const PROPERTY_NAME = 'volumeNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PublicationVolume',
    ];
}
