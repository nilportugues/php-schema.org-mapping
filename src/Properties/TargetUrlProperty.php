<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The URL of a node in an established educational framework.
 */
class TargetUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/targetUrl';
    const PROPERTY_NAME = 'targetUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AlignmentObject',
    ];
}
