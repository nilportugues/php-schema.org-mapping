<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This property is deprecated, alongside the UserInteraction types on which it depended.
 */
class InteractionCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/interactionCount';
    const PROPERTY_NAME = 'interactionCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [

    ];
}
