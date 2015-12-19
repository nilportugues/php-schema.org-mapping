<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The WebSite or SoftwareApplication where the interactions took place.
 */
class InteractionServiceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/interactionService';
    const PROPERTY_NAME = 'interactionService';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InteractionCounter',
    ];
}
