<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
 */
class RecordedAtProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recordedAt';
    const PROPERTY_NAME = 'recordedAt';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
