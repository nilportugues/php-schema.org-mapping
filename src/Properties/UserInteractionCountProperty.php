<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
 */
class UserInteractionCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/userInteractionCount';
    const PROPERTY_NAME = 'userInteractionCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InteractionCounter',
    ];
}
