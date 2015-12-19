<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The direct performer or driver of the action (animate or inanimate). e.g. *John* wrote a book.
 */
class AgentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/agent';
    const PROPERTY_NAME = 'agent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}
