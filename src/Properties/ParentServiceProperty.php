<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A broadcast service to which the broadcast service may belong to such as regional variations of a national channel.
 */
class ParentServiceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/parentService';
    const PROPERTY_NAME = 'parentService';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BroadcastService',
    ];
}
